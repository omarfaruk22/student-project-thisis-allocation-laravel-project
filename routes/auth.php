<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
// use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as adminauth;

use App\Http\Controllers\Faculty\Auth\AuthenticatedSessionController as facultyauth;
use App\Http\Controllers\Student\Auth\AuthenticatedSessionController as studentauth;


use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
// use App\Http\Controllers\Admin\Auth\RegisteredUserController as adminregister;
use App\Http\Controllers\Faculty\Auth\RegisteredUserController as facultyregister;
use App\Http\Controllers\Student\Auth\RegisteredUserController as studentregister;
use App\Http\Controllers\changepasswordcontroller;
use App\Http\Controllers\Faculty\Auth\facultypasswordController;


use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');
     Route::get('manage', [RegisteredUserController::class, 'fmanage'])
                ->name('fmanage');
    Route::get('edit/{id}', [RegisteredUserController::class, 'edit'])
                ->name('fedit');
    Route::post('update/{id}', [RegisteredUserController::class, 'update'])
                ->name('fupdate');
    Route::get('delete/{id}', [RegisteredUserController::class, 'delete'])
                ->name('fdelete');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

                
   
                
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

                Route::get('change_password', [changepasswordcontroller::class, 'index'])
                ->name('passwordchange');
                Route::post('change_password', [changepasswordcontroller::class, 'store'])
                ->name('updatepassword');
});


// this part is the admin route service


// this is faculty route section 

Route::prefix('/faculty')->name('faculty.')->group(function(){
   
    Route::get('/login',[facultyauth::class ,'create'])->name('login');
    Route::post('/login',[facultyauth::class ,'store']);

    Route::post('/logout',[facultyauth::class ,'destroy'])->name('logout');
    Route::get('/dashboard', function () {
        
        return view('faculty_DBD.dashboard');
    })->middleware('faculty');

  

});
Route::group(['prefix'=>'/faculty'],function(){
    Route::get('change.password', [facultypasswordController::class, 'index'])
      ->name('fchangepassword');
    Route::post('change.password', [facultypasswordController::class, 'store'])
      ->name('fupdatepassword');

    });


// this is student section 
Route::prefix('/student')->name('student.')->group(function(){
        Route::get('register', [studentregister::class, 'create'])
      ->name('register');

       Route::post('register', [studentregister::class, 'store']);
   
    Route::get('/login',[studentauth::class ,'create'])->name('login');
    Route::post('/login',[studentauth::class ,'store']);

    Route::post('/logout',[studentauth::class ,'destroy'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('student_DBD.studentDashboard');
    })->middleware('student');

});



