<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzaController extends Controller
{
    public function index() {
        $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg surpreme', 'base' => 'thin & crispy']
    ];
      
    return view('pizzas', [
    'pizzas' => $pizzas,
]);

    }
    public function show($id) {
        return view ();
    }
}

