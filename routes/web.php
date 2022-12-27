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

Route::get('/', function () {
    return view('home.index');
});
Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('thank/you',[App\Http\Controllers\FromsController::class,'ThankYou'])->name('thank.you');

Route::get('first/step',[App\Http\Controllers\FromsController::class,'index'])->name('first.step');
Route::post('first/step',[App\Http\Controllers\FromsController::class,'store'])->name('first.step.post');

Route::get('second/step',[App\Http\Controllers\FromsController::class,'SecondStepFrom'])->name('second.step');
Route::post('second/step',[App\Http\Controllers\FromsController::class,'SecondStepDataStore'])->name('second.step.post');

Route::get('third/step',[App\Http\Controllers\FromsController::class,'ThirdStepFrom'])->name('third.step');
Route::post('third/step',[App\Http\Controllers\FromsController::class,'ThirdStepDataStore'])->name('third.step.post');

Route::get('fourth/step',[App\Http\Controllers\FromsController::class,'FourthStepFrom'])->name('fourth.step');
Route::post('fourth/step',[App\Http\Controllers\FromsController::class,'FourthStepDataStore'])->name('fourth.step.post');

Route::get('fifth/step',[App\Http\Controllers\FromsController::class,'FifthStepForm'])->name('fifth.step');
Route::post('fifth/step',[App\Http\Controllers\FromsController::class,'FifthStepDataSave'])->name('fifth.step.post');

Route::get('data/display',[App\Http\Controllers\FromsController::class,'DisplayData']);
