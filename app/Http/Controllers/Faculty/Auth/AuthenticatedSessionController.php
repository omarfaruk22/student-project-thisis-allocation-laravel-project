<?php

namespace App\Http\Controllers\Faculty\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\facultyLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Faculty.auth.login');
    }

  
    public function store(facultyLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::FACULTY_HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('faculty')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('faculty.login');
    }
}
