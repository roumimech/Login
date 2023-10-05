<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');



Route::get('dashboard',function(){
    return 'dashboard';

});