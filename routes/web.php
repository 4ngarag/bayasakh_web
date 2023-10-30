<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BrandSubController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Home\PageController;
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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/about/history', [PageController::class, 'history']);
Route::get('/about/management', [PageController::class, 'management']);
Route::get('/hr', [PageController::class, 'human_resource']);
Route::get('/careers', [PageController::class, 'careers']);
Route::get('/brands', [PageController::class, 'brands']);
Route::get('/brandsTest', [PageController::class, 'brandsTest']); //Test
Route::get('/brandsDasida', [PageController::class, 'brandsDasida']); //Test Dasida
Route::get('/brandsSpam', [PageController::class, 'brandsSpam']); //Test Spam
Route::get('/brands/{id}', [PageController::class, 'brands_show']);
Route::get('/brands/{id}/{sid}', [PageController::class, 'brandsub_show']);
Route::get('/brands/{id}/{sid}/{pid}', [PageController::class, 'product_show']);
Route::get('/company', [PageController::class, 'company']);
Route::get('/company/{id}', [PageController::class, 'company_show']);
Route::get('/sr', [PageController::class, 'social_responsibility']);
Route::get('/thankyou', [PageController::class, 'page_thankyou']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/contact/fast', [PageController::class, 'contactFast']);
Route::get('/storelocation', [PageController::class, 'storelocation']);
Route::get('/news/{id}', [PageController::class, 'news']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/companies', CompanyController::class);
    Route::resource('/brands', BrandController::class);
    Route::resource('/brandsub', BrandSubController::class);
});

require __DIR__.'/auth.php';
