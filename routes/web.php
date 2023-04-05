<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProductsController;
use App\http\controllers\CategorysController;
use App\http\controllers\CitysController;
use App\http\controllers\CommentsController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Landing;

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
    return view('home');
});
// Route::get('landing', function () {
//     return view('landing');
// });

Route::get('landing', [Landing::class, 'render']);
Route::get('livewire', [Dashboard::class, 'render']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // category and city for add products
    Route::get('add', [ProductsController::class, 'create'])->name('add');
    
    Route::group(['controller' => ProductsController::class, 'prefix' => 'products'], function () {
        Route::get('', 'index')->middleware(['permission:view product']);
        Route::post('', 'store')->middleware(['permission:add product']);
        Route::put('/{product}', 'update')->middleware(['permission:edit All product|edit My product']);
        Route::delete('/{product}', 'destroy')->middleware(['permission:delete All product|delete My product']);
    });
    Route::get('dashboard', [ProductsController::class, 'index'])->name('dashboard');

    Route::group(['controller' => CategorysController::class, 'prefix' => 'categorys'], function () {
        Route::post('', 'store')->middleware(['permission:add category']);
        Route::get('/{category}', 'show')->middleware(['permission:view category'])->name('category.show');
        Route::put('/{category}', 'update')->middleware(['permission:edit category'])->name('category.update');
        Route::delete('/{category}', 'destroy')->middleware(['permission:delete category'])->name('category.destroy');
    });

    Route::group(['controller' => CitysController::class, 'prefix' => 'citys'], function () {
        Route::post('', 'store')->middleware(['permission:add city']);
        Route::get('/{city}', 'show')->middleware(['permission:view city']);
        Route::put('/{city}', 'update')->middleware(['permission:edit city']);
        Route::delete('/{city}', 'destroy')->middleware(['permission:delete city']);
    });

    Route::group(['controller' => CommentsController::class, 'prefix' => 'comments'], function () {
        Route::get('', 'index')->middleware(['permission:view Comment']);
        Route::post('', 'store')->middleware(['permission:add Comment']);
        Route::get('/{Comment}', 'show')->middleware(['permission:view Comment']);
        Route::put('/{Comment}', 'update')->middleware(['permission:edit Comment']);
        Route::delete('/{Comment}', 'destroy')->middleware(['permission:delete Comment']);
    });

});

Route::controller(ProductsController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/{product}', 'show');
});

// Route::get('filter', [FilterController::class, 'filter']);