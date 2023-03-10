<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AccountdetailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

// use App\Http\Middleware\UserAccess;


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
    return view('index');
});
Route::get('/chain', function () {
    return view('chain');
});
Route::get('/collectreward', function () {
    return view('collectreward');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/payment', function () {
    return view('payment');
});

Route::get('/loogin', function () {
    return view('loogin');
});
Route::get('/invitee/{id}',[RegisteredUserController::class,'invitee'])->name('invite');
Route::get('/wallet', function () {
    return view('wallet');
});
Route::get('/setting', function () {
    return view('setting');
});



Route::middleware(['auth','user-access:user'])->group(function () {
    Route::get('/',[BaseController::class, 'index'])->name('index');
    Route::get('/payment',[BaseController::class, 'payment'])->name('payment');
    Route::get('/logout',[BaseController::class, 'perforn'])->name('logout');
    Route::get('/chain',[BaseController::class, 'chain'])->name('chain');
    Route::get('/chaindetail/{id}',[BaseController::class, 'chaindetail'])->name('chaindetail');
    Route::get('/product',[BaseController::class, 'product'])->name('product');
    Route::get('/reward', [BaseController::class, 'reward'])->name('reward');
    Route::get('/withdrawrequest', [BaseController::class, 'withdrawrequest'])->name('withdrawrequest');
    Route::get('/change_currency', [BaseController::class, 'change_currency'])->name('change_currency');
    Route::get('/wallet', [BaseController::class, 'wallet'])->name('wallet');
    Route::get('/setting', [BaseController::class, 'setting'])->name('setting');
    Route::get('/invite', [BaseController::class, 'invite'])->name('invite');
    Route::post('/addaccount', [AccountdetailController::class, 'add_account'])->name('addaccount');
    Route::post('/trxid', [BaseController::class, 'trxid'])->name('trxid');
    Route::post('/updateaccount/{id}', [AccountdetailController::class, 'update_account'])->name('updateaccount');
    Route::get('/collectreward',[BaseController::class, 'collectreward'])->name('collectreward');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
