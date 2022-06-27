<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        try{
            $users = (new User())->getUser();

            $data = [
                'users' => $users
            ];

            if(!empty($data)){
                return view('admin.student.index', $data);
            }
            else{
                return redirect()->back()->with('error','No record found.');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function updateStudent(Request $request){

        $this->validate($request, [
            'first_name' => 'required|string|between:3,20',
            'last_name' => 'required|string|between:3,20',
            'email' => 'required|string',
            'role' => 'required',
        ]);

        try{
            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'role' => $request->role
            ];

            $result = (new User())->updateStudent($data, $request->user_id);

            if($result == '1'){
                return redirect()->back()->with('success', 'Data Updated Success');
            }
            else{
                return redirect()->back()->with('error', 'Data not updated');
            }
        } catch (\Exception $ex){
            return back()->with('error', $ex->getMessage());
        }
    }

    public function delete($id){
        try{
            $std_id = decrypt($id);
            $res = (new User())->studentDel($std_id);
            if($res == '1'){
                return redirect()->back()->with('success', 'Record deleted successfully');
            } else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }

        } catch (\Exception $ex){
            return back()->with('error', $ex->getMessage());
        }
    }
}
