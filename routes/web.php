<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

# home

Route::get('/productdetail', [HomeController::class, 'productdetail']);
Route::get('/categorydetail', [HomeController::class, 'categorydetail']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart', [HomeController::class, 'showcart']);
Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);
Route::post('/order', [HomeController::class, 'confirmorder']);




# category admin

Route::get('/showcategory', [AdminController::class, 'showcategory']);

Route::get('/createcategory', [AdminController::class, 'createcategory']);
Route::post('/uploadcategory', [AdminController::class, 'uploadcategory']);

Route::get('/editcategory/{id}', [AdminController::class, 'editcategory']);
Route::post('/updatecategory/{id}', [AdminController::class, 'updatecategory']);

Route::get('/deletecategory/{id}', [AdminController::class, 'deletecategory']);


# product admin


Route::get('/showproduct', [AdminController::class, 'showproduct']);

Route::get('/createproduct', [AdminController::class, 'createproduct']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::get('/editproduct/{id}', [AdminController::class, 'editproduct']);
Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/search', [AdminController::class, 'searchproduct']);



# order admin

Route::get('/showorder', [AdminController::class, 'showorder']);
Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);
Route::get('/detailorder/{id}', [AdminController::class, 'detailorder']);
Route::get('/pdf/{id}', [AdminController::class, 'pdf']);
Route::post('/send_email/{id}', [AdminController::class, 'send_email']);
Route::get('/detailuser', [AdminController::class, 'detailuser']);