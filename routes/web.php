<?php

// use App\Http\Controllers\frontEndController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/", frontEndController@homePage');

// Route::prefix('/admin')->namespace('app\Http\Controllers\Admin')->group(function () {
//     Route::get('dashboard','AdminController@dashboard');
// });

Route::prefix('/admin')->group(function () {
    // Update the route to reference the correct controller and method
    
    Route::match(['get','post'],'login', [AdminController::class, 'login']);
    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        Route::get('logout', [AdminController::class, 'logout']); 
    });
        
});