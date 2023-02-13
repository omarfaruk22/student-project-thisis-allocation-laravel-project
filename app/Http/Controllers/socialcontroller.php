<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Exception;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Contracts\Auth\Authenticatable;
class socialcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function googlegoto()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function googleinfostore()
    
    {
        

        $socialData= Socialite::driver('google')->stateless()->user();
        
        $userfind=Student::where('socialId',  $socialData->id)->first();
        if($userfind){
            Auth::guard('student')->login($userfind);

            return redirect()->intended(RouteServiceProvider::STUDENT_HOME);
        }else{
            $user=new Student();
            $user->phone='google user';
            $user->name=$socialData->name;
            $user->email=$socialData->email;
            $user->socialId=$socialData->id;
            $user->password=encrypt('12345');
            $user->save();
            Auth::guard('student')->login($user);

            return redirect()->intended(RouteServiceProvider::STUDENT_HOME);



        }
    
}
        
    
    
    public function linkedingoto()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function linkedininfostore()
    {
        $socialData= Socialite::driver('linkedin')->stateless()->user();
        
        $userfind=Student::where('socialId',  $socialData->id)->first();
        if($userfind){
            Auth::guard('student')->login($userfind);

            return redirect()->intended(RouteServiceProvider::STUDENT_HOME);
        }else{
            $user=new Student();
            $user->phone='linkedin user';
            $user->name=$socialData->name;
            $user->email=$socialData->email;
            $user->socialId=$socialData->id;
            $user->password=encrypt('12345');
            $user->save();
            Auth::guard('student')->login($user);

            return redirect()->intended(RouteServiceProvider::STUDENT_HOME);



        }
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
}
