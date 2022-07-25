<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index(){
        $contact = (new Contact())->getContact();
        $data = [
          'contacts' => $contact
        ];

        return view('admin.contact.contact', $data);
    }

    public function singleRequest($id){
        $request_id = decrypt($id);
        $res = (new Contact())->getSingleContact($request_id);

        if(!empty($res)){
            $data = [
              'request' => $res
            ];
            return view('admin.contact.view', $data);
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function deleteSingleRequest($id){
        $request_id = decrypt($id);
        $res = (new Contact())->deleteSingleContact($request_id);

        if(!empty($res)){
            return redirect()->back()->with('success', 'Request deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
