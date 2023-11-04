<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MailController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//user RegisterR
// Route::get('/example', function () {
//     // Your route logic here
//     request()->user;

// })->middleware('user_auth');
Route::get('/',[StudentController::class,'login']);
// Route::get('mailing',[MallingController::class,'index']);

// Route::group(['middleware'=>'user_auth'],function   (){ 
    // Route::get('dashboard',[PostController::class,'index'])->name('dashboard.index');
    Route::get('dashboard',[StudentController::class,'index'])->name('dashboard.index');
    
    Route::get('/register',[StudentController::class,'create']);
    Route::post('register',[StudentController::class,'store'])->name('register');
    
    Route::get('login',[StudentController::class,'login']);
    // Route::get('login',[MailController::class,'index'])->name('forgot.button');
    Route::post('login',[StudentController::class,'loginProcess']);
    
    Route::get('post',[PostController::class,'create']);
    Route::post('post',[PostController::class,'store']);
    Route::get('post/edit/{id}',[PostController::class,'edit']);
    Route::get('post/delete/{id}',[PostController::class,'destroy']);
    Route::post('post/update',[PostController::class,'update'])->name('post.update');

// });



