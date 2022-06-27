<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
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

Route::get('file', [FileController::class, 'index'])->name('file');
Route::post('file', [FileController::class, 'store'])->name('file.store');
// index file route(master)
Route::get('/',[App\Http\Controllers\FrontendController::class,'index'])->name('index');

//  main content route
Route::get('/',[App\Http\Controllers\FrontendController::class,'content'])->name('content');

// Customer Registration Form Page
Route::get('/customer_registration', [App\Http\Controllers\FrontendController::class, 'customer_registration'])->name('customer_registration');
// Customer Login Form Page
Route::get('/customer_login', [App\Http\Controllers\FrontendController::class, 'customer_login'])->name('customer_login');
// Customer Edit Profile Page
Route::get('/edit_user_profile', [App\Http\Controllers\FrontendController::class, 'edit_user_profile'])->name('edit_user_profile');

// Shop Registration Form Page
Route::get('/shop_registration', [App\Http\Controllers\FrontendController::class, 'shop_registration'])->name('shop_registration');
// Shop Login Form Page
Route::get('/shop_login', [App\Http\Controllers\FrontendController::class, 'shop_login'])->name('shop_login');

// Shop Edit Profile Page
Route::get('/edit_shop_profile', [App\Http\Controllers\FrontendController::class, 'edit_shop_profile'])->name('edit_shop_profile');

// faq page
Route::get('/faq', [App\Http\Controllers\FrontendController::class, 'faq'])->name('faq');

// about_us page
Route::get('/about_us', [App\Http\Controllers\FrontendController::class, 'about_us'])->name('about_us');

// contact_us page
Route::get('/contact_us', [App\Http\Controllers\FrontendController::class, 'contact_us'])->name('contact_us');


Route::get('/service_list', [App\Http\Controllers\FrontendController::class, 'service_list'])->name('service_list');

Route::get('/service_detail', [App\Http\Controllers\FrontendController::class, 'service_detail'])->name('service_detail');


//begin backend

//auth
Route::post('login_new/customer',  [App\Http\Controllers\Wozah_login_Controller::class,'login_new_customer'])->name('newlogin_customer');
Route::post('login_new/shop',  [App\Http\Controllers\Wozah_login_Controller::class,'login_new_shop'])->name('newlogin_shop');
Route::post('/register/new', [App\Http\Controllers\Wozah_register_Controller::class, 'new_register'])->name('new_register');

//end auth


//update_user
Route::post('/shop/update', [App\Http\Controllers\DashboardController::class, 'shop_update'])->name('shop_update');
Route::post('/profile/update', [App\Http\Controllers\DashboardController::class, 'profile_update'])->name('profile_update')->middleware('Otpverify');
Route::get('/otp/verify', [App\Http\Controllers\DashboardController::class, 'otp_blade'])->name('verify.otp');
Route::post('/otp/verify/match', [App\Http\Controllers\DashboardController::class, 'match_otp'])->name('match_otp');
Route::post('/send/otp', [App\Http\Controllers\DashboardController::class, 'sendOtp'])->name('sendOtp');


//file upload
Route::post('/file/upload', [App\Http\Controllers\DashboardController::class, 'fileUpload'])->name('fileUpload');

//admin dashboard start
Route::get('admin/index',[App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin_index');

//category & Subcategory
Route::get('add/category',[App\Http\Controllers\admin\AdminController::class, 'category_form'])->name('category_form');
Route::post('post/category',[App\Http\Controllers\admin\AdminController::class, 'category_post'])->name('category_post');
Route::post('post/subcategory',[App\Http\Controllers\admin\AdminController::class, 'subcategory_post'])->name('subcategory_post');
Route::get('view/subcategory',[App\Http\Controllers\admin\AdminController::class, 'view_subcat'])->name('view_subcat');

//update section



//end category & subcategory

//end backend



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
