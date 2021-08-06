<?php

use App\Http\Controllers\MakeController;
use App\Http\Controllers\PostController;
use App\Models\Make;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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

Route::get('', function () {
    (new Make())->importToDb();
    dd('done');
  return view('test');

});

Route::get('test',[MakeController::class,'index']);
Route::post('test',[MakeController::class, 'store']);
