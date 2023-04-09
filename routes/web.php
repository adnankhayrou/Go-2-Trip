<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProductsController;
use App\http\controllers\CategorysController;
use App\http\controllers\CitysController;
use App\http\controllers\CommentsController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Comment;
use App\Http\Livewire\Landing;

// Route::put('/products/{products}', [ProductsController::class, 'update']);


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
Route::get('subcatories/{id}', [ProductsController::class, 'loadSubCategories']);

Route::get('/', function () {
    return view('home');
});
Route::get('landing', function () {
    return view('landing');
});

// Route::get('landing', [Landing::class, 'render']);
Route::get('livewire', [Dashboard::class, 'render']);
Route::get('show/{id}', [Comment::class, 'render'])->name('product.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // category and city for add products
    // Route::get('show/{id}', [ProductsController::class, 'show'])->name('product.show');
    Route::get('add', [ProductsController::class, 'create'])->name('add');
    
    Route::group(['controller' => ProductsController::class, 'prefix' => 'products'], function () {
        Route::get('', 'index')->middleware(['permission:view product']);
        Route::post('', 'store')->middleware(['permission:add product']);
        Route::get('/{product}', 'edit')->middleware(['permission:edit All product|edit My product'])->name('product.edit');
        Route::put('/update/{product}', 'update')->middleware(['permission:edit All product|edit My product'])->name('product.update');
        Route::get('/delete/{product}', 'destroy')->middleware(['permission:delete All product|delete My product'])->name('product.destroy');
    });
    Route::get('dashboard', [ProductsController::class, 'index'])->name('dashboard');

    Route::group(['controller' => CategorysController::class, 'prefix' => 'categorys'], function () {
        Route::post('', 'store')->middleware(['permission:add category']);
        Route::get('/{category}', 'show')->middleware(['permission:view category'])->name('category.show');
        Route::put('/update', 'update')->middleware(['permission:edit category'])->name('category.update');
        Route::get('/delete/{category}', 'destroy')->middleware(['permission:delete category'])->name('category.destroy');
    });

    Route::group(['controller' => SubCategoryController::class, 'prefix' => 'subCategory'], function () {
        Route::post('', 'store')->middleware(['permission:add category']);
        Route::get('/{category}', 'show')->middleware(['permission:view category'])->name('subCategory.show');
        Route::put('/update', 'update')->middleware(['permission:edit category'])->name('subCategory.update');
        Route::get('/delete/{category}', 'destroy')->middleware(['permission:delete category'])->name('subCategory.destroy');
    });

    Route::group(['controller' => CitysController::class, 'prefix' => 'citys'], function () {
        Route::post('', 'store')->middleware(['permission:add city']);
        Route::get('/{city}', 'show')->middleware(['permission:view city'])->name('city.show');
        Route::put('/update', 'update')->middleware(['permission:edit city'])->name('city.update');
        Route::get('/delete/{city}', 'destroy')->middleware(['permission:delete city'])->name('city.destroy');
    });

    Route::group(['controller' => CommentsController::class, 'prefix' => 'comments'], function () {
        Route::get('', 'index')->middleware(['permission:view Comment']);
        Route::post('', 'store')->middleware(['permission:add Comment']);
        Route::get('/{Comment}', 'show')->middleware(['permission:view Comment'])->name('comment.show');
        Route::put('/update', 'update')->middleware(['permission:edit Comment'])->name('comment.update');
        Route::get('/delete/{Comment}', 'destroy')->middleware(['permission:delete Comment'])->name('comment.destroy');
    });

});


// Route::controller(ProductsController::class)->group(function () {
//     Route::get('/products', 'index');
//     Route::get('/products/{product}', 'show');
// });

// Route::get('filter', [FilterController::class, 'filter']);