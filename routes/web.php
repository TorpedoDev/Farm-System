<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EggController;
use App\Http\Controllers\DockController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\CartoonController;
use App\Http\Controllers\ChickenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\DeadchickenController;
use App\Http\Controllers\CheckensalesController;
use App\Http\Controllers\AdditionalexpensesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Auth::routes(['register' => false]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'chicken'] , function(){
        Route::get('/' , [ChickenController::class , 'index'])->name('chicken.index');
        Route::get('/create' , [ChickenController::class , 'create'])->name('chicken.create');
        Route::post('/store' , [ChickenController::class , 'store'])->name('chicken.store');
        Route::get('/{id}/edit' , [ChickenController::class , 'edit'])->name('chicken.edit');
        Route::put('/{id}' , [ChickenController::class , 'update'])->name('chicken.update');
        Route::get('/{id}/show' , [ChickenController::class , 'show'])->name('chicken.show');
        Route::delete('/{id}' , [ChickenController::class , 'destroy'])->name('chicken.destroy');
    });

    Route::group(['prefix' => 'medicine'] , function(){
        Route::get('/' , [MedicineController::class , 'index'])->name('medicine.index');
        Route::get('/create' , [MedicineController::class , 'create'])->name('medicine.create');
        Route::post('/store' , [MedicineController::class , 'store'])->name('medicine.store');
        Route::get('/{id}/edit' , [MedicineController::class , 'edit'])->name('medicine.edit');
        Route::put('/{id}' , [MedicineController::class , 'update'])->name('medicine.update');
        Route::get('/{id}/show' , [MedicineController::class , 'show'])->name('medicine.show');
        Route::delete('/{id}' , [MedicineController::class , 'destroy'])->name('medicine.destroy');
    });

    Route::group(['prefix' => 'feed'] , function(){
        Route::get('/' , [FeedController::class , 'index'])->name('feed.index');
        Route::get('/create' , [FeedController::class , 'create'])->name('feed.create');
        Route::post('/store' , [FeedController::class , 'store'])->name('feed.store');
        Route::get('/{id}/edit' , [FeedController::class , 'edit'])->name('feed.edit');
        Route::put('/{id}' , [FeedController::class , 'update'])->name('feed.update');
        Route::get('/{id}/show' , [FeedController::class , 'show'])->name('feed.show');
        Route::delete('/{id}' , [FeedController::class , 'destroy'])->name('feed.destroy');
    });

    Route::group(['prefix' => 'cartoon'] , function(){
        Route::get('/' , [CartoonController::class , 'index'])->name('cartoon.index');
        Route::get('/create' , [CartoonController::class , 'create'])->name('cartoon.create');
        Route::post('/store' , [CartoonController::class , 'store'])->name('cartoon.store');
        Route::get('/{id}/edit' , [CartoonController::class , 'edit'])->name('cartoon.edit');
        Route::put('/{id}' , [CartoonController::class , 'update'])->name('cartoon.update');
        Route::get('/{id}/show' , [CartoonController::class , 'show'])->name('cartoon.show');
        Route::delete('/{id}' , [CartoonController::class , 'destroy'])->name('cartoon.destroy');
    });

    Route::group(['prefix' => 'eggsales'] , function(){
        Route::get('/' , [EggController::class , 'index'])->name('eggsales.index');
        Route::get('/create' , [EggController::class , 'create'])->name('eggsales.create');
        Route::post('/store' , [EggController::class , 'store'])->name('eggsales.store');
        Route::get('/{id}/edit' , [EggController::class , 'edit'])->name('eggsales.edit');
        Route::put('/{id}' , [EggController::class , 'update'])->name('eggsales.update');
        Route::get('/{id}/show' , [EggController::class , 'show'])->name('eggsales.show');
        Route::delete('/{id}' , [EggController::class , 'destroy'])->name('eggsales.destroy');
    });

    Route::group(['prefix' => 'checkensales'] , function(){
        Route::get('/' , [ CheckensalesController::class , 'index'])->name('checkensales.index');
        Route::get('/create' , [CheckensalesController::class , 'create'])->name('checkensales.create');
        Route::post('/store' , [CheckensalesController::class , 'store'])->name('checkensales.store');
        Route::get('/{id}/edit' , [CheckensalesController::class , 'edit'])->name('checkensales.edit');
        Route::put('/{id}' , [CheckensalesController::class , 'update'])->name('checkensales.update');
        Route::get('/{id}/show' , [CheckensalesController::class , 'show'])->name('checkensales.show');
        Route::delete('/{id}' , [CheckensalesController::class , 'destroy'])->name('checkensales.destroy');
    });

    Route::group(['prefix' => 'dock'] , function(){
        Route::get('/' , [ DockController::class , 'index'])->name('dock.index');
        Route::get('/create' , [DockController::class , 'create'])->name('dock.create');
        Route::post('/store' , [DockController::class , 'store'])->name('dock.store');
        Route::get('/{id}/edit' , [DockController::class , 'edit'])->name('dock.edit');
        Route::put('/{id}' , [DockController::class , 'update'])->name('dock.update');
        Route::get('/{id}/show' , [DockController::class , 'show'])->name('dock.show');
        Route::delete('/{id}' , [DockController::class , 'destroy'])->name('dock.destroy');
    });

    Route::group(['prefix' => 'deadchicken'] , function(){
        Route::get('/' , [ DeadchickenController::class , 'index'])->name('deadchicken.index');
        Route::get('/create' , [DeadchickenController::class , 'create'])->name('deadchicken.create');
        Route::post('/store' , [DeadchickenController::class , 'store'])->name('deadchicken.store');
        Route::get('/{id}/edit' , [DeadchickenController::class , 'edit'])->name('deadchicken.edit');
        Route::put('/{id}' , [DeadchickenController::class , 'update'])->name('deadchicken.update');
        Route::delete('/{id}' , [DeadchickenController::class , 'destroy'])->name('deadchicken.destroy');
    });

    Route::group(['prefix' => 'workersalary'] , function(){
        Route::get('/' , [ WorkerController::class , 'index'])->name('workersalary.index');
        Route::get('/create' , [WorkerController::class , 'create'])->name('workersalary.create');
        Route::post('/store' , [WorkerController::class , 'store'])->name('workersalary.store');
        Route::get('/{id}/edit' , [WorkerController::class , 'edit'])->name('workersalary.edit');
        Route::put('/{id}' , [WorkerController::class , 'update'])->name('workersalary.update');
        Route::get('/{id}/show' , [WorkerController::class , 'show'])->name('workersalary.show');
        Route::delete('/{id}' , [WorkerController::class , 'destroy'])->name('workersalary.destroy');
    });


    Route::group(['prefix' => 'additionalexpenses'] , function(){
        Route::get('/' , [ AdditionalexpensesController::class , 'index'])->name('additionalexpenses.index');
        Route::get('/create' , [AdditionalexpensesController::class , 'create'])->name('additionalexpenses.create');
        Route::post('/store' , [AdditionalexpensesController::class , 'store'])->name('additionalexpenses.store');
        Route::get('/{id}/edit' , [AdditionalexpensesController::class , 'edit'])->name('additionalexpenses.edit');
        Route::put('/{id}' , [AdditionalexpensesController::class , 'update'])->name('additionalexpenses.update');
        Route::get('/{id}/show' , [AdditionalexpensesController::class , 'show'])->name('additionalexpenses.show');
        Route::delete('/{id}' , [AdditionalexpensesController::class , 'destroy'])->name('additionalexpenses.destroy');
    });

    
    Route::group(['prefix' => '/profile', 'as' => 'profiles.'], function(){
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
        Route::put('/update-pass', [ProfileController::class, 'updatePass'])->name('updatePass');
    });
    

});






