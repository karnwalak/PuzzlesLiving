<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/about', [DashboardController::class, 'about']);
    Route::get('/contact', [DashboardController::class, 'contact']);
    Route::post('/addcontact', [DashboardController::class, 'addcontact']);
    Route::get('/banner', [DashboardController::class, 'banner']);
    Route::post('/addmainbanner', [DashboardController::class, 'addmainbanner']);
    Route::post('/deletemainbanner', [DashboardController::class, 'deletemainbanner']);
    // Route::get('/middle_banner', [DashboardController::class, 'middle_banner']);
    Route::get('/testimonials', [DashboardController::class, 'testimonials']);
    Route::post('/addtestimonial', [DashboardController::class, 'addtestimonial']);
    Route::post('/deletetestimonial', [DashboardController::class, 'deletetestimonial']);
    Route::get('/edittestimonial/{id}', [DashboardController::class, 'edittestimonial']);
    Route::post('/updatetestimonial', [DashboardController::class, 'updatetestimonial']);
    Route::get('/enquiries', [DashboardController::class, 'enquiries']);
    Route::get('/callbacksrequested', [DashboardController::class, 'callbacksrequested']);
    Route::get('/accomodations', [DashboardController::class, 'accomodations']);
    Route::post('/addaboutpage', [DashboardController::class, 'addaboutpage']);
    Route::get('/addaccomodation', [DashboardController::class, 'addaccomodation']);
    Route::post('/postAccomodation', [DashboardController::class, 'postAccomodation']);
    Route::post('/deleteaccomodation', [DashboardController::class, 'deleteaccomodation']);
    Route::get('/editaccomodation/{id}', [DashboardController::class, 'editaccomodation']);
    Route::post('/updateAccomodation', [DashboardController::class, 'updateAccomodation']);
});
    
