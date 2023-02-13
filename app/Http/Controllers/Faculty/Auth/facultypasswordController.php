<?php

namespace App\Http\Controllers\Faculty\Auth;
use App\Models\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class facultypasswordController extends Controller
{
    public function index(){
        return view('Faculty.auth.changepass');

}

public function store(Request $request){
   $request->validate([
       'current_password' => ['required','string'],
       'password' => ['required', 'string', 'min:8', 'confirmed']
   ]);

   $currentPasswordStatus = Hash::check($request->current_password, auth()->guard('faculty')->user()->password);
   if($currentPasswordStatus){

       Faculty::findOrFail(Auth::guard('faculty')->user()->id)->update([
           'password' => Hash::make($request->password),
       ]);

       return redirect()->back()->with('message','Password Updated Successfully');

   }else{

       return redirect()->back()->with('message','Current Password does not match with Old Password');
   }

}

}
