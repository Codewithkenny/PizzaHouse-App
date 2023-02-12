<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function menu() {
        return view('pages.menu');
    }
    public function order() {
        return view('pages.order');
    }
    public function contact() {
        $data = array(
            'title' =>'Contact'
            
        );
        return view('pages.contact')->with($data);
    }
}
