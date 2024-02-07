<?php

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
// Route::middleware([CheckReferral::class, 'middleware'=>'guest'],)->group(function(){
//     Route::get('/', App\Http\Livewire\Login::class)->name('login');
//     Route::get('/signup', App\Http\Livewire\Signup::class);
// });

use App\Http\Livewire\Login;
use App\Http\Livewire\Signup;
use App\Http\Middleware\CheckReferral;

Route::middleware([CheckReferral::class, 'guest'])->group(function () {
    Route::get('/', Login::class)->name('login');
    Route::get('/signup', Signup::class);
});


Route::group(['middleware' => ['auth', 'ensure.wallet']], function () {
    Route::get('/dashboard', App\Http\Livewire\Dashboard::class)->name('home');
    Route::get('/product', App\Http\Livewire\Product::class);
    Route::get('/withdraw', App\Http\Livewire\Withdraw::class);
    Route::get('/banking', App\Http\Livewire\Banking::class);
    Route::get('/profile', App\Http\Livewire\Profile::class);
    Route::get('/invite', App\Http\Livewire\Invite::class);
    Route::get('/team', App\Http\Livewire\Team::class);
    Route::get('/deposits', App\Http\Livewire\Deposits::class);
    Route::get('/downlines/{id}', [App\Http\Controllers\HomeController::class, 'downline']);
    Route::get('/orders', App\Http\Livewire\Order::class);
    Route::get('/buy/{id}', [App\Http\Controllers\HomeController::class, 'payment']);
    Route::post('/storepayment', [App\Http\Controllers\HomeController::class, 'storepayment']);
    Route::post('/check-conditions', [App\Http\Controllers\HomeController::class, 'checkConditions']);
    Route::get('/check-referral-count', [App\Http\Controllers\HomeController::class, 'checkReferralCount'])->name('checkReferralCount');
    Route::get('/check-product-validity', [App\Http\Controllers\HomeController::class, 'checkProductValidity'])->name('checkProductValidity');

    Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'walletIndex'])->name('wallet.index');
    // Route::post('/wallet/deposit', [App\Http\Controllers\HomeController::class, 'walletDeposit'])->name('wallet.deposit');
    // Route::post('/wallet/withdraw', [App\Http\Controllers\HomeController::class, 'walletWithdraw'])->name('wallet.withdraw');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    //deposit
    Route::get('/dep/paid/{id}', [App\Http\Controllers\AdminController::class, 'deppaid']);
    Route::get('/dep/fail/{id}', [App\Http\Controllers\AdminController::class, 'depfail']);
    //deposit end
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users']);
    Route::get('/edituser/{id}', [App\Http\Controllers\AdminController::class, 'edituser']);
    Route::post('/storeuser', [App\Http\Controllers\AdminController::class, 'storeuser']);
    Route::get('/plans', [App\Http\Controllers\AdminController::class, 'plans']);
    Route::get('/addplans', [App\Http\Controllers\AdminController::class, 'addplans']);
    Route::post('/storeplan', [App\Http\Controllers\AdminController::class, 'storeplan']);
    Route::get('/editplan/{id}', [App\Http\Controllers\AdminController::class, 'editplan']);
    Route::post('/updateplan', [App\Http\Controllers\AdminController::class, 'updateplan']);
    Route::get('/deposits', [App\Http\Controllers\AdminController::class, 'deposits']);
    Route::get('/withdrawals', [App\Http\Controllers\AdminController::class, 'withdrawals']);
    //withdraw
    Route::get('/with/paid/{id}', [App\Http\Controllers\AdminController::class, 'withpaid']);
    Route::get('/with/fail/{id}', [App\Http\Controllers\AdminController::class, 'withfail']);

});
