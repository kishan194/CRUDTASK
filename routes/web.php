<?php

use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\subcategorycontroller;

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
    return view('product');
});
Route::get('/regitration',function(){
    return view('regitration');
});
Route::get('/category/addcategory',function(){
    return view('category/index');
});
Route::view('insert','/insert');

Route::controller(productcontroller::class)->group(function(){

    
    Route::get('/display','show')->name('show');

    Route::post('/add' ,'addproduct')->name('addproduct');
    

    Route::get('/delete/{id}' ,'deleteproduct')->name('delete.product');
    
    Route::get('/user/{id}' ,'singleproduct')->name('view.product');

    Route::POST('/update/{id}','updateproduct')->name('update.product');
    Route::get('/updatepage/{id}' ,'updatepage')->name('update.page');


    Route::POST('/addimage/{id}','addimage')->name('addimage.product');
    Route::get('/updateimage/{id}','updateimage')->name('updateimage.product');

    
    Route::POST('/addmulimage/{id}','addmulimage')->name('addmulimage.product');
    Route::get('/upadtemulimage/{id}','updatemulimage')->name('updatemulimage.product');
});
Route::controller(categorycontroller::class)->group(function(){
    Route::get('/',  'index');
 Route::post('/category',  'store')->name('store.category');

});

// Route::controller(subcategorycontroller::class)->group(function(){
//     Route::get('/',  'Addsubcategory');
//     Route::post('/subcategory',  'storesubcategory')->name('store.subcategory');

// });





