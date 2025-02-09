<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
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
