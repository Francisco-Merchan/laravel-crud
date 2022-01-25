<?php

use App\Http\Controllers\DeveloperController;
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

Route::get('/', [DeveloperController::class, "index"]);

Route::get('/create', [DeveloperController::class, "create"]);

Route::post('/createDeveloper', [DeveloperController::class, "store"]);

Route::get('/developer/{developer}', [DeveloperController::class, "show"]);

Route::get('/developer/{developer}/edit', [DeveloperController::class, "edit"]);

Route::put('/developer/{developer}', [DeveloperController::class, "update"]);

Route::delete('/developer/{developer}', [DeveloperController::class, "destroy"]);
