<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

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

Route::get('admin', [App\Http\Controllers\AdminController::class, 'adminview']);
Route::get('delete/{id}', [App\Http\Controllers\AdminController::class, 'delete']);

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('home');
// Route::post('/home',[App\Http\Controllers\HomeController::class, 'afterpayment'])->name('home');
// Route::get('/home',[App\Http\Controllers\HomeController::class, 'checkout']);

Route::post('/edit/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('edit');

Route::get('/user_profile', [App\Http\Controllers\ProfileController::class, 'userprofile']);
Route::get('courseinfo', [App\Http\Controllers\ProfileController::class, 'coursedetails']);
// Route::get('courseinfo/', [App\Http\Controllers\ProfileController::class,'showcourse']);
// route of
Route::get('coursedetailspage/{id}', [App\Http\Controllers\ProfileController::class,'details']);

Route::get('fileupload', [App\Http\Controllers\UploadController::class,'showfile']);
Route::post('fileupload', [App\Http\Controllers\UploadController::class,'savefile']);
Route::get('fileupload', [App\Http\Controllers\UploadController::class,'show']);

Route::get('edit/{id}', [App\Http\Controllers\ProfileController::class,'editprofile']);

Route::get('checkout',[CheckoutController::class, 'checkout']);
Route::post('checkout',[CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');

Route::get('session/set',[App\Http\Controllers\ProfileController::class,'storeSessionData']);

// Route::post('/store', function () {

//     // Retrieve a piece of data from the session...
//     $value = session('key');

//     // Specifying a default value...
//     $value = session('key', 'default');

//     // Store a piece of data in the session...
//     session(['key' => 'value']);
//     return view('/home');
// });