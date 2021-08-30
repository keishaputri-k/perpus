<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books/get/{id}', [BookController::class,'readBook']);

Route::post('books/create', [BookController::class,'createBook']);

Route::post('books/update/{id}', [BookController::class, 'updateBook']);

Route::delete('books/delete/{id}', [BookController::class,'deleteBook']);

Route::post('register', [UserController::class, 'registerUser']);

Route::post('login', [UserController::class, 'loginUser']);

Route::post('logout', [UserController::class, 'logoutUser']);

Route::post('delete', [UserController::class, 'deleteUser']);

Route::get('user/get/{id}', [UserController::class, 'getUser']);

Route::post('user/update/{id}', [UserController::class, 'updateUser']);

Route::delete('user/delete/{id}', [UserController::class, 'deleteUser']);

Route::get('author/get/{id}', [AuthorController::class, 'readAuthor']);

Route::post('author/create', [AuthorController::class, 'createAuthor']);

Route::post('author/update/{id}', [AuthorController::class, 'updateAuthor']);

Route::delete('author/delete/{id}', [AuthorController::class, 'deleteAuthor']);
