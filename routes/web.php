<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kadai01Controller;

use App\Http\Controllers\Sample02_1Controller;
use App\Http\Controllers\Sample02_2Controller;
use App\Http\Controllers\Sample02_3Controller;
use App\Http\Controllers\Sample04Controller;
use App\Http\Controllers\Sample06Controller;


use App\Http\Controllers\Kadai02_1Controller;
use App\Http\Controllers\Kadai02_2Controller;
use App\Http\Controllers\Kadai02_3Controller;
use App\Http\Controllers\Kadai02_4Controller;

use App\Http\Controllers\Kadai03Controller;

use App\Http\Controllers\Kadai04Controller;
use App\Http\Controllers\ArticlesController;



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//②	ルーティングの設定

//Kadai01
Route::get('/kadai01',[Kadai01Controller::class,'index']);
//Sample02_1
Route::get('/sample02_1',[Sample02_1Controller::class,'index']);
//Sample02_2
Route::get('/sample02_2',[Sample02_2Controller::class,'index']);
//Sample02_3
Route::get('/sample02_3',[Sample02_3Controller::class,'index']);
//Sample04
Route::get('/sample04',[Sample04Controller::class,'index']);
Route::post('/sample04',[Sample04Controller::class,'post']);
//Sample06
Route::resource('/sample06',Sample06Controller::class);

//Kadai02_1;
Route::get('/kadai02_1',[Kadai02_1Controller::class,'index']);
//Kadai02_2;
Route::get('/kadai02_2',[Kadai02_2Controller::class,'index']);
//Kadai02_3;
Route::get('/kadai02_3',[Kadai02_3Controller::class,'index']);
//Kadai02_4;
Route::get('/kadai02_4',[Kadai02_4Controller::class,'index']);
//Kadai03;
Route::get('/kadai03',[Kadai03Controller::class,'index']);

Route::get('/kadai03/registration',[Kadai03Controller::class,'create']);

Route::get('/kadai03/detail',[Kadai03Controller::class,'show']);

Route::get('/kadai03/editing',[Kadai03Controller::class,'edit']);
//Kadai04;
Route::get('/kadai04',[Kadai04Controller::class,'index']);
Route::post('/kadai04',[Kadai04Controller::class,'post']);
//Kadai06;
Route::resource('/Articles',ArticlesController::class);
