<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $res = (new Blog())->getBlog();

        if(!empty($res)){
            $data = [
                'blogs' => $res
            ];
            return view('teacher.my-blogs', $data);
        }else{
            return redirect()->back()->with('error', 'Something went wromg.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'blog_title' => 'required|string',
        ]);
        try{
            $data = [
                'blog_title' => $request->blog_title,
                'blog_description' => $request->blog_description
            ];
            if($request->has('blog_cover') && !empty('blog_cover')){
                $data['blog_cover'] = $this->compressImagePHP($request, 'blog_cover');
            }

            $res = (new Blog())->store($data);
            if(!empty($res)){
                return redirect()->route('teacher.blog.index')->with('success', 'Blog post created successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        } catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $blog_id = decrypt($id);
        $res = (new Blog())->edit($blog_id);
        if(!empty($res)){
            $data = [
                'blogs' => $res
            ];
            return view('teacher.edit-blog', $data);
        }else{
            return redirect()->back()->with('error', 'Something went wromg.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $blog_id = decrypt($id);

        $data = [
          'blog_title' => $request->blog_title,
          'blog_description' => $request->blog_description
        ];
        if($request->has('blog_cover') && !empty('blog_cover')){
            $data['blog_cover'] = $this->compressImagePHP($request, 'blog_cover');
        }

        $res = (new Blog())->blogUpdate($data, $blog_id);
        if($res == '1'){
            return redirect()->back()->with('success', 'Blog updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteBlog(Request $request){
        $blog_id = $request->user_id;
        $res = (new Blog())->deleleBlog($blog_id);

        if($res == '1'){
            return response()->json(['success'=>'Blog deleted successfully!']);
        }else{
            return response()->json(['error', 'Something went wrong.']);
        }
    }

    public function Blogs(){
        $blogs = (new Blog())->getBlogs();
        $recent = (new Blog())->getRecent();

        $data = [
          'blogs' => $blogs,
          'recents' => $recent
        ];

        return view('blog', $data);
    }

    public function storeBlog(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'blog_title' => 'required|string',
        ]);
        try{
            if($request->has('email')){
                $data = [
                    'email' => $request->email,
                    'blog_title' => $request->blog_title,
                    'blog_description' => $request->blog_description
                ];
            }else{
                $data = [
                    'blog_title' => $request->blog_title,
                    'blog_description' => $request->blog_description
                ];
            }

            $res = (new Blog())->store($data);

            if(!empty($res)){
                if(auth()->user()){
                    if(auth()->user()->role == '2'){
                        return redirect()->route('teacher.blog.index')->with('success', 'Blog post created successfully');
                    } else{
                        return redirect()->back()->with('success', 'Blog post created successfully');
                    }
                }else{
                    return redirect()->back()->with('success', 'Blog post created successfully');
                }
            }else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        } catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function compressImagePHP( $request, $key ) : string
    {
        if(is_array($request) ){
            $image = $request[ $key ];

        } else {
            $image = $request->file( $key );
        }

        $imageHashedName = $image->hashName();

        $imgExplodedName = explode( ".", $imageHashedName );

        $publicPath = public_path( 'images' ) . DIRECTORY_SEPARATOR;

        $img = Image::make( $image )->save( $publicPath . $imgExplodedName[ 0 ] . '.' . $imgExplodedName[ 1 ] );

        $img->backup();

        $img->resize( 200, null, function( $constraint ) {
            $constraint->aspectRatio();
            $constraint->upsize();
        } )->save( $publicPath . $imgExplodedName[ 0 ] . '-thumbs200.' . $imgExplodedName[ 1 ] );
        $img->reset();

        $img->destroy();

        return $imgExplodedName[ 0 ] . '.' . $imgExplodedName[ 1 ];
    }
}

