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

// Pizza Routes 
Route::get('/pizzas', [pizzaController::class, 'index']);
// get data from db
  
Route::get('/pizzas/{id}', [pizzaController::class, 'show']);

  




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
     