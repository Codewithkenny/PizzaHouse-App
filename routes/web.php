<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.  Now create something great!
|
*/

// Pages  Routes 
Route::get('/order', [PagesController::class, 'order']);
Route::get('/menu', [PagesController::class, 'menu']);
Route::get('/contact', [PagesController::class, 'contact']);

  



// Pizza Routes
 Route::get('/', function() {
   return view('welcome');
 });


 Route::get('/order', function () {
    return view('pages.order');
 });
 Route::get('/menu', function () {
    return view('pages.menu');
 });
 Route::get('/contact', function () {
    return view('pages.contact');
 });
      


 Route::get('/pizzas', [pizzaController::class, 'pizzas']);