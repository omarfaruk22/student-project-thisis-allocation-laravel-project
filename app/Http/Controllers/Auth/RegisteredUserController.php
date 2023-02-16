<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function fmanage(){
        $user=User::orderby('id','asc')->get();

        return view('auth.manageUser', compact('user'));
  
      }
      public function edit($id){

        $users=User::find($id);
        return view('auth.editUser', compact('users'));

      }
      public function update(Request $request, $id){
        $user =User::find($id);
        $user->name= $request->name;
        $user->email= $request->email;
        $user->role= $request->role;
        $user->update();
        return redirect()->route('fmanage');


    }

      public function delete($id){
        $delete=User::find($id);
        $delete->delete();
        return redirect()->route('fmanage');

        
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required' ],
           
        ]);
        // $user= new User();
        // $user->name=$request->name;
        // $user->email=$request->email;
        // $user->password=encrypt('12345');
        // $user->save();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
           
        ]);

        if($user){
            return redirect()->route('register')->with('message','Registered successfully completed');
        }

    //     if ($user) {
    //         if ($user->role == 1) {
    //             if (Hash::check($request->password, $user->password)) {
    //                 Auth::login($user);
    //                 return "Registered successfully completed";
    //             }
    //         }
    //         if ($user->role == 0) {
    //             if (Hash::check($request->password, $user->password)) { 
    //                 return "Registered successfully completed";
    //             }
    //         }
    //         if ($user->role == 2) {
    //             if (Hash::check($request->password, $user->password)) {
    //                 return "Registered successfully completed";
    //             }
    //         }
    //     }
        
    // }
}
}