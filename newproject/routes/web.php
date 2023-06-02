<?php

use App\Http\Controllers\ProductModelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
//     return "hiiiiii";
// });
// Route::get('/Add',"ProductModelController.php@AddProduct");
Route::get('Add',[ProductModelController::class,'display']);
Route::post('Add',[ProductModelController::class,'AddProduct']);

