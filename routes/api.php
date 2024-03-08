<?php

use App\Http\Controllers\apiuserController;
use App\Http\Controllers\CrudUsersController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::controller(apiuserController::class)
// ->prefix("/users")
// ->group(function(){

//     Route::get("/", "index"); //list user -> /users/
//     Route::get("/{id}", "show"); //show user by id -> /users/{id}
//     Route::post("/", "store;"); //create user -> /users/
//     Route::put("/{id}", "update;"); //update user -> /users/{id}
//     Route::delete("/{id}", "destroy;"); //delete user -> /users/{id}

// });


//tugas 13
// Route::apiResource('users', CrudUsersController::class);
Route::get('/users', [CrudUsersController::class, 'index']);
Route::get('/users/{id}', [CrudUsersController::class, 'show']);
Route::post('/users', [CrudUsersController::class, 'store']);
Route::put('/users/{id}', [CrudUsersController::class, 'update']);
Route::delete('/users/{id}', [CrudUsersController::class, 'destroy']);