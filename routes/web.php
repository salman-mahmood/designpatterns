<?php


use App\Http\Controllers\AdapterController;
use App\Http\Controllers\DecoratorController;
use App\Http\Controllers\IteratorController;
use App\Http\Controllers\ObserverController;
use App\Http\Controllers\StrategyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/strategypattern', [StrategyController::class, 'calculateTotal'])->name('cart');
Route::get('/adapterpattern', [AdapterController::class, 'AdaptPayment'])->name('AdaptPayment');
Route::get('/decoratorpattern', [DecoratorController::class, 'Decorator'])->name('decorator');
Route::get('/reguser', [ObserverController::class, 'RegUser'])->name('userreg');
Route::post('/userreg', [ObserverController::class, 'UserReg'])->name('Userreg');
Route::get('/post', [ObserverController::class, 'Posts']);
Route::post('/publishpost', [ObserverController::class, 'PublishPost'])->name('publishpost');
Route::get('/iteratorpattern',[IteratorController::class, 'Iterator'])->name('iterator');
