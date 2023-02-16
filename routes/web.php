<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\groupcontroller as st_group;
use App\Http\Controllers\Backend\Groupdetailcontroller as group_detail;
use App\Http\Controllers\Backend\projectController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Student\checkController;
use  App\Http\Controllers\supercontroller;
use App\Http\Controllers\Faculty\Auth\RegisteredUserController as facultyregister;
use App\Http\Controllers\Student\Auth\RegisteredUserController as studentregister;
use App\Http\Controllers\socialcontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\allocationcontroller;
use App\Http\Controllers\messageController;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\landingController;

use App\Models\Backend\Project;
use App\Models\Backend\group;
use App\Models\Faculty;
use App\Models\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $currentPage = 'home';
    $countfaculty=Faculty::count();
    $countfield=Project::count();
    $countgroup=group::count();
    $countcontact=Contact::count();
    return view('frontend.landing',compact('currentPage','countfaculty','countfield','countgroup','countcontact'));
});

Route::get('/contact', [landingController::class, 'contact'])->name('landingcontact');
Route::get('/about', [landingController::class, 'create'])->name('landingabout');
Route::get('/home', [landingController::class, 'index'])->name('landinghome');
Route::get('/researchfield', [landingController::class, 'field'])->name('landingfield');



// Route::group(['middleware' => 'auth'], function() {
//     Route::inertia('/dashboard', 'Dashboard')->name('dashboard');

//     Route::get("/admin", [AuthenticatedSessionController::class, "create"]);

//     Route::get('/admin', [HomeController::class, 'index'])
//     ->name('admin.home');
//     Route::get('/register', [HomeController::class, 'registerHome'])
//     ->name('register.home');
//     Route::get('/account', [HomeController::class, 'accountHome'])
//     ->name('account.home');

// });


Route::get('/admin', function () {
    return view('auth.login');
});
Route::group(['prefix' => '/sadmin','middleware' => 'auth'],function(){
    Route::get("/sadmin", [AuthenticatedSessionController::class, "create"]);
    Route::get('/admin', [HomeController::class, 'index'])->middleware('admin')
    ->name('admin.home');
    Route::get('/register', [HomeController::class, 'registerHome'])
    ->name('register.home');
    Route::get('/account', [HomeController::class, 'accountHome'])
    ->name('account.home');

});

Route::group(['prefix'=>'/sadmin'],function(){

 
 
Route::group(['prefix'=>'/st_group'],function(){
    Route::get('/create',[st_group::class, 'create'])->name('gcreate');
    Route::post('/ginsert',[st_group::class, 'store'])->name('ginsert');
    Route::get('/manage',[st_group::class, 'index'])->name('groupmanage');
    Route::get('/gshow',[st_group::class, 'gshow'])->name('gshow');
    Route::get('/gedit/{id}',[st_group::class, 'gedit'])->name('gedit');
    Route::post('/update/{id}',[st_group::class, 'gupdate'])->name('gupdate');
    Route::get('/delete/{id}',[st_group::class, 'gdelete'])->name('gdelete');
    // Route::post('/ginsert','App\Http\Controllers\Backend\CategoryController@store')->name('ginsert');
    // Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('gmanage');
    // Route::get('/gshow','App\Http\Controllers\Backend\CategoryController@catshow')->name('gshow');
    // Route::get('/gedit/{id}','App\Http\Controllers\Backend\CategoryController@catedit')->name('gedit');
    // Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('gupdate');
    // Route::get('/delete/{id}','App\Http\Controllers\Backend\CategoryController@delete')->name('gdelete');
   

    });

    Route::group(['prefix'=>'/details'],function(){
        Route::get('/create',[group_detail::class, 'create'])->name('dcreate');
        Route::post('/dinsert',[group_detail::class, 'store'])->name('dinsert');
        Route::get('/manage',[group_detail::class, 'index'])->name('dmanage');
        Route::get('/dshow',[group_detail::class, 'show'])->name('dshow');
        Route::get('/dedit/{id}',[group_detail::class, 'dedit'])->name('dedit');
        Route::post('/update/{id}',[group_detail::class, 'dupdate'])->name('dupdate');
        Route::get('/delete/{id}',[group_detail::class, 'ddelete'])->name('ddelete');

        });
        Route::group(['prefix'=>'/project'],function(){
            Route::get('/create',[projectController::class, 'create'])->name('pcreate');
            Route::post('/insert',[projectController::class, 'store'])->name('pinsert');
            Route::get('/manage',[projectController::class, 'index'])->name('pmanage');
            Route::get('/show',[projectController::class, 'show'])->name('pshow');
            Route::get('/edit/{id}',[projectController::class, 'edit'])->name('pedit');
            Route::post('/pdate/{id}',[projectController::class, 'update'])->name('pupdate');
            Route::get('/delete/{id}',[projectController::class, 'delete'])->name('pdelete');
    
            });
           // this part admin payment section 
            Route::get('manage_pay', [paymentcontroller::class, 'payshow'])->name('managepay');
            Route::get('edit/{id}', [paymentcontroller::class, 'payedit'])
            ->name('payedit');
            Route::post('update/{id}', [paymentcontroller::class, 'payupdate'])
            ->name('payupdate');
            Route::get('/delete/{id}',[paymentcontroller::class, 'paydelete'])->name('paydelete');
             // end admin payment section 
            // faculty manage 
            Route::group(['prefix'=>'/faculty'],function(){
                Route::get('register', [facultyregister::class, 'create'])
                ->name('fregister');
                Route::post('register', [facultyregister::class, 'store'])->name('finsert');
                Route::get('manage', [facultyregister::class, 'fymanage'])
                ->name('fymanage');
                Route::get('edit/{id}', [facultyregister::class, 'edit'])
                ->name('fyedit');
                Route::post('update/{id}', [facultyregister::class, 'update'])
                ->name('fyupdate');
                Route::get('delete/{id}', [facultyregister::class, 'delete'])
                ->name('fydelete');
        
                });
                Route::group(['prefix'=>'/student'],function(){
                    Route::get('show', [studentregister::class, 'show'])
                    ->name('show');
                    
                    Route::get('contacts',[Contactcontroller::class, 'index'])->name('contactst');
                    
                    Route::get('allocatshows',[allocationcontroller::class, 'adminallocatshow'])->name('allocatshowadmin');
                    Route::post('contact',[Contactcontroller::class, 'store'])->name('contactstore');
                    
                    Route::get('allocatshow/{id}',[allocationcontroller::class, 'destroy'])->name('stallocatshow');
                    });

                    Route::get('allocatedit/{id}',[allocationcontroller::class, 'editallocatadmin'])->name('editallocat');
                    Route::post('allocatupdate/{id}',[allocationcontroller::class, 'updateallocatadmin'])->name('updateallocat');

                   
    
 

 
});




Route::group(['prefix'=>'/faculty'],function(){
    Route::get('showon', [allocationcontroller::class, 'create'])
    ->name('show_group');
    Route::get('show', [allocationcontroller::class, 'show'])
    ->name('show details');
    ;
    Route::get('message', [messageController::class, 'index'])
    ->name('facultymessage');
    ;
    Route::post('sentmessage', [messageController::class, 'poststore'])->name('messagesent');

 
    
    
    });

Route::group(['prefix'=>'/student'],function(){
    Route::get('check', [checkController::class, 'index'])
    ->name('check');
    Route::post('group_id', [checkController::class, 'store'])
    ->name('group_id');
    // Route::get('edit', [checkController::class, 'edit'])
    // ->name('ainsret');
    
    Route::get('supervisor/{id?}', [supercontroller::class, 'show'])
    ->name('supervisor');
    Route::get('description/{id?}', [supercontroller::class, 'description'])
    ->name('description');

    Route::get('stripe', [paymentcontroller::class, 'index'])
    ->name('stripe');
    Route::post('paystripe', [paymentcontroller::class, 'store'])->name('paystripe');
    Route::get('redirect', [paymentcontroller::class, 'onpage'])->name('redirect');

    Route::get('pay_details', [paymentcontroller::class, 'payin'])->name('pay_details');
    Route::post('pay_details_store', [paymentcontroller::class, 'paystore'])->name('pay_details_store');

    Route::post('allocation', [allocationcontroller::class, 'store'])->name('allocation_store');
    Route::get('allocationshow/{id}', [allocationcontroller::class, 'show'])->name('allocation_show');

    Route::get('student.message', [messageController::class, 'checkit'])->name('student_message');
    Route::post('student.message', [messageController::class, 'studentmsg'])->name('student_mesg');
    Route::post('message.sent', [messageController::class, 'studentcomment'])->name('student_comment');
    
    
    
    });



// Route::get('/admin', function () {
//     return view('backend.dashboard');
// })->middleware(['auth:admin'])->name('dashboard1');


Route::get('/googlegoto', [socialcontroller::class, 'googlegoto'])->name('googlegoto');
Route::get('/google/login', [socialcontroller::class, 'googleinfostore']);

Route::get('/linkedingoto', [socialcontroller::class, 'linkedingoto'])->name('linkedingoto');
Route::get('/linkedin/login', [socialcontroller::class, 'linkedininfostore']);


 




require __DIR__.'/auth.php';

