<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function storeContact(Request $request){

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
        ]);

        try{
            $data = [
              'name' => $request->name,
              'email' => $request->email,
              'subject' => $request->subject,
              'pctextarea' => $request->pctextarea,
            ];

            $res = (new Contact())->storeContact($data);

            if(!empty($res)){
                return \redirect()->back()->with('success', 'Request submitted successfully.');
            }else{
                return \redirect()->back()->with('error', 'Something went wrong.');
            }

        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
