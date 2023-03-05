<?php

use App\Http\Controllers\productcontroller;
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



Route::match(['get', 'post'], '/category',[productcontroller::class,'category'])->name('category');

Route::match(['get', 'post'], '/product',[productcontroller::class,'product'])->name('product');

Route::match(['get','post'],'/',[productcontroller::class,'liste'])->name('liste');

Route::match(['get','post'],'/{idcategory}/list',[productcontroller::class,'liste'])->name('liste_product');

Route::match(['get','post'],'/{idproduct}/addcarrinho',[productcontroller::class,'addcarrinho'])->name('addcarrinho');


Route::match(['get','post'],'/carrinho',[productcontroller::class,'vercarrinho'])->name('vercarrinho');

Route::match(['get','post'],'/{index_table}/carrinho',[productcontroller::class,'excluircarrinho'])->name('excluir_carrinho');


Route::match(['get','post'],'/cadastrar',[productcontroller::class,'cadastrar'])->name('cadastrar_client');

