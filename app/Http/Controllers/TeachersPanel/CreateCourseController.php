<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\CourseLecture;
use App\Models\CreateClass;
use App\Models\CreateCourse;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class CreateCourseController extends Controller
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
            'class_name' => 'required',
            'course_price' => 'required|numeric',
            'course_date' => 'required|string|max:15',
            'course_time' => 'required|string|max:15',
            'course_name' => 'required|string|max:30',
        ]);

        try{
            $data = [
                'create_class_id' => $request->class_name,
                'teacher_id' => auth()->user()->id,
                'price' => $request->course_price,
                'course_date' => $request->course_date,
                'course_time' => $request->course_time,
                'course_name' => $request->course_name,
            ];

            if($request->has('course_cover') && !empty($request->course_cover)){
                $data['course_image'] = $this->compressImagePHP( $request, 'course_cover' );
            }
            if(!empty($request->description_course)){
                $data['course_description'] = $request->description_course;
            }
            if($request->has('vid_1') && !empty($request->vid_1)){
                $vid[] = $this->uploadVid($request, 'vid_1');
            }
            if($request->has('vid_2') && !empty($request->vid_2)){
                $vid[] = $this->uploadVid($request, 'vid_2');
            }
            if($request->has('vid_3') && !empty($request->vid_3)){
                $vid[] = $this->uploadVid($request, 'vid_3');
            }
            if($request->has('vid_4') && !empty($request->vid_4)){
                $vid[] = $this->uploadVid($request, 'vid_4');
            }

            $res = (new CreateCourse())->createCourse($data);

            if(!empty($vid)){
                $sub_type = (new Subscription())->subType();
                $remaining_vid = (new User())->checkVids();
                $remaining_vids = $remaining_vid->remaining_vids;

                $count = count($vid);
                $vids_left = $remaining_vids - $count;

                if($sub_type->subscription_type == 'trial' && $vids_left > 0){
                    $resul = (new CourseLecture())->storeLectures($res->id, $vid);
                    if(!empty($resul)){
                        $result = (new User())->updateRemainingVids($vids_left);
                    }
                }elseif($sub_type->subscription_type == 'basic' && $vids_left > 0){
                    $resul = (new CourseLecture())->storeLectures($res->id, $vid);
                    if(!empty($resul)){
                        $result = (new User())->updateRemainingVids($vids_left);
                    }
                }elseif ($sub_type->subscription_type == 'enterprise'){
                    $result = (new CourseLecture())->storeLectures($res->id, $vid);
                }else{
                    return redirect()->back()->with('error', 'You have remaining ' .$remaining_vid. 'videos which are less then your selected videos.');
                }
            }

            if(!empty($result)){
                return redirect()->route('teacher.my-courses')->with('success', 'Course created successfully.');
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
        $course_id = decrypt($id);

        $res = (new CreateCourse())->getSingleCourse($course_id);

        $vid = (new CourseLecture())->getVids($course_id);

        $classes = (new CreateClass())->getAllClasses();

        if(!empty($res)){
            $data = [
                'cour' => $res,
                'videos' => $vid,
                'classes' => $classes
            ];

            return view('teacher.edit-course', $data);
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
            'class_name' => 'required',
            'course_price' => 'required|numeric',
            'course_date' => 'required|string|max:15',
            'course_time' => 'required|string|max:15',
            'course_name' => 'required|string|max:30',
        ]);

        try{
            $course_id = decrypt($id);
            $data = [
                'create_class_id' => $request->class_name,
                'teacher_id' => auth()->user()->id,
                'price' => $request->course_price,
                'course_date' => $request->course_date,
                'course_time' => $request->course_time,
                'course_name' => $request->course_name,
            ];

            if($request->has('course_cover') && !empty($request->course_cover)){
                $data['course_image'] = $this->compressImagePHP( $request, 'course_cover' );
            }
            if(!empty($request->description_course)){
                $data['course_description'] = $request->description_course;
            }
            if($request->has('vid_1') && !empty($request->vid_1)){
                $vid[] = $this->uploadVid($request, 'vid_1');
            }
            if($request->has('vid_2') && !empty($request->vid_2)){
                $vid[] = $this->uploadVid($request, 'vid_2');
            }
            if($request->has('vid_3') && !empty($request->vid_3)){
                $vid[] = $this->uploadVid($request, 'vid_3');
            }
            if($request->has('vid_4') && !empty($request->vid_4)){
                $vid[] = $this->uploadVid($request, 'vid_4');
            }

            $res = (new CreateCourse())->updateCourse($data, $course_id);

            $result = (new CourseLecture())->updateLectures($course_id, $vid);

            if(!empty($result)){
                return redirect()->route('teacher.my-courses')->with('success', 'Class updated successfully.');
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

    public function courseVideo(Request $request){

        try{
            if($request->has('course_vid') && !empty($request->course_vid)){
                $vid = uploadVid($request, 'course_vid');
            }

            $data = [
                'course_id' => $request->course_id,
                'course_doc' => $vid
            ];
            $result = (new CourseLecture())->storeSingleLectures($data);
            if(!empty($result)){
                return redirect()->back();
            }else{
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function deleteCourse(Request $request){
        $course_id = $request->user_id;
        $res = (new CreateCourse())->deleteCourse($course_id);

        if($res == '1'){
            return response()->json(['success'=>'Course deleted successfully!']);
        }else{
            return response()->json(['error', 'Something went wrong.']);
        }
    }

    public function uploadVid($request, $key){
        if(is_array($request) ){
            $file = $request[ $key ];
        } else {
            $file = $request->file( $key );
        }

        $filename = $file->getClientOriginalName();
        $path = public_path( 'videos' ) . DIRECTORY_SEPARATOR;
        $file->move($path, $filename);
        return $filename;
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
