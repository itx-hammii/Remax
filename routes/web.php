<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false, 'verify' => false, 'confirm' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home.index');
});

// admin routes
Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('user/details', [App\Http\Controllers\FromsController::class, 'DisplayDataAdmin'])->name('user.details');
    Route::delete('delete/user/{id}',[App\Http\Controllers\FromsController::class, 'destroy'])->name('delete.user');
});

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('thank/you', [App\Http\Controllers\FromsController::class, 'ThankYou'])->name('thank.you');

Route::get('introduction', [App\Http\Controllers\FromsController::class, 'index'])->name('first.step');
Route::post('introduction', [App\Http\Controllers\FromsController::class, 'store'])->name('first.step.post');

Route::get('are/you/ready', [App\Http\Controllers\FromsController::class, 'SecondStepFrom'])->name('second.step');
Route::post('are/you/ready', [App\Http\Controllers\FromsController::class, 'SecondStepDataStore'])->name('second.step.post');

Route::get('about/you', [App\Http\Controllers\FromsController::class, 'ThirdStepFrom'])->name('third.step');
Route::post('about/you', [App\Http\Controllers\FromsController::class, 'ThirdStepDataStore'])->name('third.step.post');

Route::get('one/last/step', [App\Http\Controllers\FromsController::class, 'FourthStepFrom'])->name('fourth.step');
Route::post('one/last/step', [App\Http\Controllers\FromsController::class, 'FourthStepDataStore'])->name('fourth.step.post');

Route::get('step-to/your-business', [App\Http\Controllers\FromsController::class, 'FifthStepForm'])->name('fifth.step');
Route::post('step-to/your-business', [App\Http\Controllers\FromsController::class, 'FifthStepDataSave'])->name('fifth.step.post');

 Route::get('data/display', [App\Http\Controllers\FromsController::class, 'DisplayData']);
