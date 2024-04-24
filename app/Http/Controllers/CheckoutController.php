<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function checkout(){
        return inertia("Index/Index",[
            'message' => 'hello from package inertia in laravel world in index page'
        ]);
    }
    public function show(){
        return inertia("Index/Show",['message' => 'hello from package inertia in laravel world in show page']);
    }
}
