<?php

use App\Http\Controllers\ClientControler;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//listing all Clients with Posts and related Comments
Route::get('index',[ClientControler::class,'index']);

//Store new Client , new Posts and new comments
Route::post('store',[ClientControler::class , 'store']);
Route::post('storepost',[PostController::class,'store']);
Route::post('storecomment',[CommentController::class,'store']);

//Show user post and comments
Route::get('show/{id}',[ClientControler::class,'show']);
 

