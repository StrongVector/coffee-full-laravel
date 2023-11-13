<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coffee;

class CoffeeController extends Controller
{
    public function index()
        {
            return view ('coffee.all', [
                "title" => "Coffee",
                "coffee" => coffee::all()
                ]
            ); 
        }

        public function show($coffees)
        {
            return view('coffee.detail', [
                "title" => "detail-coffee",
                "coffee" => coffee::find($coffees)
            ]);
        }

        
}
