<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\RemarksController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UpdatesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
Route::group(["middleware"=>"auth"],function(){
    Route::get('/home', [App\Http\Controllers\ActivitiesController::class, 'index'])->name('home');
    Route::post('/activities',[ActivitiesController::class,'store'])->name('activity.store');
    Route::patch('/activity/{id}',[ActivitiesController::class,'update'])->name('activity.change-status');
    Route::post('/activity/{id}/remarks',[RemarksController::class,'store'])->name('remark.store');
    Route::get('/updates',[UpdatesController::class,'index'])->name('updates');
    // Route::delete('/updates/{id}',[ActivitiesController::class,'destroy'])->name('activity.destroy');
    Route::get('/reports',[ReportController::class,'showReportPage'])->name('activity.showReport');
    Route::post('/report',[ReportController::class,'showReport'])->name('activity.report');
});