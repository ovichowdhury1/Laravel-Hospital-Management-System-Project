<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
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



Route::get('/',[HomeController::class,'index']);

Route::get('/login', function () {return view('auth\login');})->name('login');

Route::get('/register', function () {return view('auth\register');})->name('register');

Route::get('/home',[HomeController::class,'redirect'])->
       middleware('auth','verified');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);


Route::get('myappointment',[HomeController::class,'myappointment']);

Route::get('cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
  
Route::get('/add_schedule_view',[DoctorController::class,'addschedule']);

Route::post('/upload_schedule',[DoctorController::class,'uploadschedule']);

Route::get('/showschedule',[AdminController::class,'showschedule']);
