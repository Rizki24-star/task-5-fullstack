<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\loginController;
use App\Http\Controllers\api\v1\registerController;
use App\Http\Controllers\api\v1\user\userController;
use App\Http\Controllers\api\v1\article\articleController;

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

//Users
Route::prefix('/user')->group(function () {
    Route::post('/login',[loginController::class,'login']);
    Route::post('/register',[registerController::class,'register']);

    // Get all user 
    Route::middleware('auth:api')->get('/all', [userController::class,'index']);

        // Get all user 
        
});

Route::prefix('/article')->group(function () {

    Route::get('/all', [articleController::class,'index'])->middleware('auth:api');
    Route::post('/add', [articleController::class,'store'])->middleware('auth:api');
    Route::get('/{id}', [articleController::class,'show'])->middleware('auth:api');
    Route::post('/update/{id}', [articleController::class,'update'])->middleware('auth:api');
    Route::post('/delete/{id}', [articleController::class,'destroy'])->middleware('auth:api');
    // Route::post('/add', [articleController::class,'addArticle']);
        
});




  
