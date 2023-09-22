<?php

use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Route Resource
|--------------------------------------------------------------------------
*/
// Route::resource('furnitures', FurnitureController::class);

/*
<===== Furnitures =====>
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/furnitures', [FurnitureController::class, 'index']);
Route::get('/furnitures/{id}', [FurnitureController::class, 'show']);
Route::post('/furnitures', [FurnitureController::class, 'store']);
Route::put('/furnitures/{id}', [FurnitureController::class, 'update']);
Route::delete('/furnitures/{id}', [FurnitureController::class, 'destroy']);

/*
<===== Kategori =====>
*/

Route::get('/kategoris', [KategoriController::class, 'index']);
Route::get('/kategoris/{id}', [KategoriController::class, 'show']);
Route::post('/kategoris', [KategoriController::class, 'store']);
Route::put('/kategoris/{id}', [KategoriController::class, 'update']);
Route::delete('/kategoris/{id}', [KategoriController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

});




