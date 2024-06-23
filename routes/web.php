<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Main\IndexController')->name('main.index');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\Admin\Main\IndexController::class, 'index'])->name('admin.main.index');

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Project\IndexController')->name('admin.project.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Project\CreateController')->name('admin.project.create');
        Route::post('/', 'App\Http\Controllers\Admin\Project\StoreController')->name('admin.project.store');
        Route::get('/{project}', 'App\Http\Controllers\Admin\Project\ShowController')->name('admin.project.show');
        Route::get('/{project}/edit', 'App\Http\Controllers\Admin\Project\EditController')->name('admin.project.edit');
        Route::patch('/{project}', 'App\Http\Controllers\Admin\Project\UpdateController')->name('admin.project.update');
        Route::delete('/{project}', 'App\Http\Controllers\Admin\Project\DeleteController')->name('admin.project.delete');
    });

    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Tag\IndexController')->name('admin.tag.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Tag\CreateController')->name('admin.tag.create');
        Route::post('/', 'App\Http\Controllers\Admin\Tag\StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'App\Http\Controllers\Admin\Tag\ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'App\Http\Controllers\Admin\Tag\EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'App\Http\Controllers\Admin\Tag\UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'App\Http\Controllers\Admin\Tag\DeleteController')->name('admin.tag.delete');
    });
});