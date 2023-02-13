<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        if ($user) {
            if ($user->role == 1) {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    return redirect()->route('admin.home');
                }
                else{
                    return "password dosn't match";
                }
                    
            }

            if ($user->role == 0) {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    return redirect()->route('admin.home'); //register 
                   
                }
                else{
                    return "password dosn't match";
                }
                
            }
            if ($user->role == 2) {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    return redirect()->route('admin.home');  //accounts
                   
                }
                else{
                    return "password dosn't match";
                }
            }
        }
        else {
            return "Email dosen,t match";

        }
    }


    public function passwordCheck($request, $user){

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
