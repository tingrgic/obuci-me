<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\JacketController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\PantController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\ShoeController;

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

Route::get('/', function () {
    return view('welcome');
});

route::resource('users', UserController::class);
route::resource('favourites', FavouriteController::class);
route::resource('jackets', JacketController::class);
route::resource('outfits', OutfitController::class);
route::resource('pants', PantController::class);
route::resource('roles', RoleController::class);
route::resource('shirts', ShirtController::class);
route::resource('shoes', ShoeController::class);
route::resource('users', UserController::class);
route::resource('users', UserController::class);
route::resource('users', UserController::class);