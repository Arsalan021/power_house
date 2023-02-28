<?php

use Illuminate\Support\Facades\Route;
// For Admin 
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AboutController;






use App\Http\Controllers\FrontController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();




Route::controller(FrontController::class)->group(function () {
    route::get('/','index')->name('index');
    route::get('about-us','about')->name('about-us');
    route::get('services','services')->name('services');
    route::get('projects','projects')->name('projects');
    route::get('contact-us','contactUs')->name('contact-us');
    route::post('doContact','doContact')->name('doContact');
    
    
});

Route::controller(AdminController::class)->group(function () {
    
   route::get('admin/','user_login')->name('user-login')->middleware('guest');
   route::post('loginAdminProcess','loginAdminProcess')->name('loginAdminProcess');
   
   route::get('admin/user-register','userRegister')->name('user-register');
   route::post('user-register-process','RegisterProcess')->name('user-register-process');
   
   Route::get('forgot-password', 'forgotPasswords')->name('forgot-password');
   Route::post('forgotPassword', 'forgotPassword')->name('forgotPassword');
   Route::post('updatePassword', 'updatePassword')->name('updatePassword');
   route::any('resetpassword/{id}','resetpassword')->name('resetpassword');
   Route::any('(:any)', 'notFound');
   
});



Route::middleware(['auth','can:isAdmin'])->prefix('admin')->group(function()
{
    Route::resource('users', UserController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('testimonial', TestimonialController::class);

    Route::get('change-status-service',[ServiceController::class,'changeStatusService'])->name('change-status-service');
    Route::get('change-type-project',[ProjectController::class,'changTypeProject'])->name('change-type-project');

    Route::controller(AdminController::class)->group(function () 
    {   
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
        Route::get('change-status', 'change_status')->name('change-status');
        Route::get('setting', 'setting')->name('setting');
        Route::post('addSetting', 'addSetting')->name('addSetting');
        route::get('view-contact','viewContact')->name('view-contact');
        route::get('contact-delete/{id}','contactCelete')->name('contact-delete');
        
    });

    Route::controller(AboutController::class)->group(function () 
    {   
        Route::get('view-about', 'viewAbout')->name('view-about');
        Route::post('addAbout','addAbout')->name('addAbout');
     });

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
