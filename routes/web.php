<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\Backend\ControllerProduct;
use App\Http\Controllers\Backend\CategoryController;

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

Route::get('/dashboard',[Dashboard::class,'dashboard'])->name('dashboard');

//for product crud
Route::get('/addproduct',[ControllerProduct::class,'index'])->name('addproductt');

Route::post('/insertproduct',[ControllerProduct::class,'insert'])->name('insertproduct');

Route::get('/showproduct',[ControllerProduct::class,'show'])->name('showproduct');

Route::get('/delete/{id}',[ControllerProduct::class,'delete'])->name('deleteproduct');

Route::get('/activeproduct/{id}',[ControllerProduct::class,'active'])->name('activeproduct');

Route::get('/inactiveproduct/{id}',[ControllerProduct::class,'inactive'])->name('inactiveproduct');

Route::get('/editproduct/{id}',[ControllerProduct::class,'edit'])->name('editproduct');

Route::post('/updateproduct/{id}',[ControllerProduct::class,'update'])->name('updateproduct');

Route::get('/addcategory',[CategoryController::class,'index'])->name('addcategory');



