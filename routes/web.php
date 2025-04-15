<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;


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

Route::get('/', [FoodController::class,'homePage'])->name('HomePage');

Route::get('/menu/les_petits_déjeunersPage', [FoodController::class,'les_petits_déjeunersPage'])->name('les_petits_déjeunersPage');

Route::get('/menu/les_snacks_et_les_plats', [FoodController::class,'les_snacks_et_les_plats'])->name('les_snacks_et_les_plats');

Route::get('/menu/les_jus_et_les_boissons_et_froides', [FoodController::class,'les_jus_et_les_boissons_et_froides'])->name('les_jus_et_les_boissons_et_froides');

Route::get('/menu/les_crépes_et_les_viennoiseries',[FoodController::class,'les_crépes_et_les_viennoiseries'])->name('les_crépes_et_les_viennoiseries');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
