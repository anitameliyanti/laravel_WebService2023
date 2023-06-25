<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\KomentarController;

Route::resource('users', UserController::class);
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
route::get('/', function (){
    echo env('APP_NAME');
});

route::get('/users', [UserController::class,'index']);
route::get('/users/{id}', [UserController::class,'show']);
route::post('/users', [UserController::class,'store']);
route::put('/users', [UserController::class,'update']);
route::delete('/users', [UserController::class,'destroy']);

route::get('/postings', [PostingController::class,'index']);
route::get('/postings/{id}', [PostingController::class,'show']);
route::post('/postings', [PostingController::class,'store']);
route::put('/postings', [PostingController::class,'update']);
route::delete('/postings', [PostingController::class,'destroy']);

route::get('/komentars', [KomentarController::class,'index']);
route::get('/komentars/{id}', [KomentarController::class,'show']);
route::post('/komentars', [KomentarController::class,'store']);
route::put('/komentars', [KomentarController::class,'update']);
route::delete('/komentars', [KomentarController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
