<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/inspiration', function () {
    return view('homepages.inspiration');
});
Route::get('/roombooking', function () {
    return view('homepages.roombooking');
});
Route::get('/about', function () {
    return view('homepages.about');
});
Route::get('/contact', function () {
    return view('homepages.contact');
});
Route::get('/login', function () {
    return view('login');
});
// go to registration page
Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
Route::post('/registrationSave',[RegistrationController::class,'registrationSave'])->name('registrationSave');


Route::get('/maindashboard', function () {
    return view('AdminDashboard.main');
});
Route::get('/dashboard', function () {
    return view('AdminDashboard.AdminPages.dashboard');
});
Route::get('/roomdetails', function () {
    return view('AdminDashboard.AdminPages.RoomDetails.roomdetails');
});

Route::get('/adduser', function () {
    return view('AdminDashboard.AdminPages.Users.adduser');
});
Route::get('/manageuser', function () {
    return view('AdminDashboard.AdminPages.Users.manageuser');
});
