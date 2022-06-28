<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
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
            'class_name' => 'required|numeric',
            'course_date' => 'required|string|max:15',
            'course_time' => 'required|string|max:15',
            'course_name' => 'required|string|max:100',
        ]);

        try{

            $data = [
                'class_name_id' => $request->class_name,
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

            $res = (new CreateCourse())->createCourse($data);

            if(!empty($res)){
                return redirect()->route('teacher.my-courses')->with('success', 'Class created successfully.');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
