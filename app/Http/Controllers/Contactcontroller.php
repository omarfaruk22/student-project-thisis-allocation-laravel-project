<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Contactcontroller extends Controller
{
   
    public function store(Request $request){
        $data=new Contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function index(){
        $stcontact=Contact::orderby('id', 'asc')->get();
        return view('backend.pages.contact.student_contact',compact('stcontact'));

    }
}
