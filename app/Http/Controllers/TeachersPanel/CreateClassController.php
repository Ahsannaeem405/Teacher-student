<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\CreateClass;
use Illuminate\Http\Request;

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
           'teacher_name' => 'required|string|min:3|max:25',
           'class_name' => 'required|string|max:10',
           'class_date' => 'required|string|max:15',
           'class_time' => 'required|string|max:15',
           'class_title' => 'required|string|max:100',
           'class_hours' => 'required|numeric',
           'class_mints' => 'required|numeric',
        ]);

        try{
            $class_duration = $request->class_hours.' '.'hr'.' '.$request->class_mints.' '.'min';

            $data = [
              'teacher_name' => $request->teacher_name,
              'class_name' => $request->class_name,
              'class_title' => $request->class_title,
              'class_date' => $request->class_date,
              'class_time' => $request->class_time,
              'class_duration' => $class_duration,
            ];

            if($request->has('class_cover') && !empty($request->class_cover)){
                $data['class_image'] = compressImagePHP( $request, 'class_cover' );
            }
            if(!empty($request->class_description)){
                $data['class_description'] = $request->class_description;
            }

            $res = (new CreateClass())->createClass($data);
            if($res == '1'){
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
            'teacher_name' => 'required|string|min:3|max:25',
            'class_name' => 'required|string|max:10',
            'class_date' => 'required|string|max:15',
            'class_time' => 'required|string|max:15',
            'class_title' => 'required|string|max:100',
        ]);

        try{
            $data = [
                'teacher_name' => $request->teacher_name,
                'class_name' => $request->class_name,
                'class_title' => $request->class_title,
                'class_date' => $request->class_date,
                'class_time' => $request->class_time
            ];

            if($request->has('class_cover') && !empty($request->class_cover)){
                $data['class_image'] = compressImagePHP( $request, 'class_cover' );
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

    public function delete($class_id){
        $id = decrypt($class_id);
        $res = (new CreateClass())->delClass($id);

        if($res == 1){
            return redirect()->back()->with('success', 'Class deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
