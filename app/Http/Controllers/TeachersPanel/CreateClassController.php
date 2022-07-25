<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\CreateClass;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class CreateClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
           'class_name' => 'required|string|max:10',
           'class_title' => 'required|string|max:100',
        ]);

        try{
//            $class_duration = $request->class_hours.' '.'hr'.' '.$request->class_mints.' '.'min';

            $data = [
              'teacher_name' => auth()->user()->name,
              'user_id' => auth()->user()->id,
              'class_name' => $request->class_name,
              'class_title' => $request->class_title,
            ];

            if(empty($request->class_date) && empty($request->class_time)){
                $data['class_date'] = date('Y-m-d');
                $data['class_time'] = date('H:i');
            }else{
                $data['class_date'] = $request->class_date;
                $data['class_time'] = $request->class_time;
            }

            if($request->has('class_cover') && !empty($request->class_cover)){
                $data['class_image'] = $this->compressImagePHP( $request, 'class_cover' );
            }
            if(!empty($request->class_description)){
                $data['class_description'] = $request->class_description;
            }

            $res = (new CreateClass())->createClass($data);
            if(!empty($res)){
                return redirect()->route('teacher.dashboard')->with('success', 'Class created successfully.');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show($class_id)
    {
        $id = decrypt($class_id);

        $res = (new CreateClass())->getSingleClass($id);

        $data = [
            'class' => $res
        ];

        if(!empty($res)){
            return view('teacher.class-detail', $data);
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($class_id)
    {
        $id = decrypt($class_id);

        $res = (new CreateClass())->getSingleClass($id);

        $data = [
          'class' => $res
        ];

        if(!empty($res)){
            return view('teacher.edit-class', $data);
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'class_name' => 'required|string|max:10',
            'class_title' => 'required|string|max:100',
        ]);

        try{
            $data = [
                'teacher_name' => auth()->user()->name,
                'user_id' => auth()->user()->id,
                'class_name' => $request->class_name,
                'class_title' => $request->class_title,
            ];

            if(empty($request->class_date)){
                if(empty($request->class_time)){
                    $data['class_time'] = date('H:i');
                }else{
                    $data['class_time'] = $request->class_time;
                }
                $data['class_date'] = date('Y-m-d');
            }else{
                if(empty($request->class_time)){
                    $data['class_time'] = date('H:i');
                }else{
                    $data['class_time'] = $request->class_time;
                }
                $data['class_date'] = $request->class_date;
            }

            if($request->has('class_cover') && !empty($request->class_cover)){
                $data['class_image'] = $this->compressImagePHP( $request, 'class_cover' );
            }
            if(!empty($request->class_description)){
                $data['class_description'] = $request->class_description;
            }

            $res = (new CreateClass())->updateClass($data, $id);
            if(!empty($res)){
                return redirect()->route('teacher.dashboard')->with('success', 'Class updated successfully.');
            }else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }

        } catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
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

    public function delete(Request $request){
        $class_id = $request->user_id;
        $res = (new CreateClass())->delClass($class_id);

        if($res == '1'){
            return response()->json(['success'=>'Class deleted successfully!']);
        }else{
            return response()->json(['error', 'Something went wrong.']);
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

