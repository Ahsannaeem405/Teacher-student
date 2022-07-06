<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\CourseLecture;
use App\Models\CreateClass;
use App\Models\CreateCourse;
use Illuminate\Http\Request;

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
                $data['course_image'] = compressImagePHP( $request, 'course_cover' );
            }
            if(!empty($request->description_course)){
                $data['course_description'] = $request->description_course;
            }
            if($request->has('vid_1') && !empty($request->vid_1)){
                $vid[] = uploadVid($request, 'vid_1');
            }
            if($request->has('vid_2') && !empty($request->vid_2)){
                $vid[] = uploadVid($request, 'vid_2');
            }
            if($request->has('vid_3') && !empty($request->vid_3)){
                $vid[] = uploadVid($request, 'vid_3');
            }
            if($request->has('vid_4') && !empty($request->vid_4)){
                $vid[] = uploadVid($request, 'vid_4');
            }

            $res = (new CreateCourse())->createCourse($data);

            $result = (new CourseLecture())->storeLectures($res->id, $vid);

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
                $data['course_image'] = compressImagePHP( $request, 'course_cover' );
            }
            if(!empty($request->description_course)){
                $data['course_description'] = $request->description_course;
            }
            if($request->has('vid_1') && !empty($request->vid_1)){
                $vid[] = uploadVid($request, 'vid_1');
            }
            if($request->has('vid_2') && !empty($request->vid_2)){
                $vid[] = uploadVid($request, 'vid_2');
            }
            if($request->has('vid_3') && !empty($request->vid_3)){
                $vid[] = uploadVid($request, 'vid_3');
            }
            if($request->has('vid_4') && !empty($request->vid_4)){
                $vid[] = uploadVid($request, 'vid_4');
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

    public function deleteCourse($id){
        $course_id = decrypt($id);
        $res = (new CreateCourse())->deleteCourse($course_id);

        if($res == '1'){
            return redirect()->back()->with('success', 'Course deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
