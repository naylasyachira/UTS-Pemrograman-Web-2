<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect('/categories');
});

Route::resource('categories', CategoryController::class);
Route::get('/menus/trash', [MenuController::class, 'trash'])
    ->name('menus.trash');

Route::resource('menus', MenuController::class);