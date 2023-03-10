<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SettingsController;
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

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/',[AdminController::class, 'index'])->name('/');
    Route::get('/user',[AdminController::class, 'user'])->name('admin.users');
    Route::get('/newuser',[AdminController::class, 'newuser'])->name('admin.newusers');
    Route::get('/widthdraw',[AdminController::class, 'withdraw'])->name('admin.withdraw');
    Route::get('/product',[ProductController::class, 'addproduct'])->name('admin.product');
    Route::get('/setting',[SettingsController::class, 'setting'])->name('admin.setting');
    Route::get('/addproduct',[ProductController::class, 'add_product'])->name('admin.addproduct');
    Route::post('/storeproduct',[ProductController::class, 'store_product'])->name('admin.storeproduct');
    Route::get('/editproduct/{id}',[ProductController::class, 'edit_product'])->name('admin.editproduct');
    Route::post('/updateproduct/{id}',[ProductController::class, 'update_product'])->name('admin.updateproduct');
    Route::get('/addlevel',[LevelController::class, 'add_level'])->name('admin.addlevel');
    Route::get('/showlevel',[LevelController::class, 'show_level'])->name('admin.showlevel');
    Route::post('/storelevel',[LevelController::class, 'store_level'])->name('admin.storelevel');
    Route::get('/editlevel/{id}',[LevelController::class, 'edit_level'])->name('admin.editlevel');
    Route::post('/updatelevel/{id}',[LevelController::class, 'update_level'])->name('admin.updatelevel');
    Route::post('/updatesetting/{id}',[SettingsController::class, 'update_setting'])->name('admin.updatesetting');
});

require __DIR__.'/auth.php';
