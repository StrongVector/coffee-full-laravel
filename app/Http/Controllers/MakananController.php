<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makanan;

class MakananController extends Controller
{
    public function index()
        {
            return view ('makanan.all', [
                "title" => "makanan",
                "makanan" => makanan::all()
                ]
            ); 
        }

        public function show($makanan)
        {
            return view('makanan.detail', [
                "title" => "detail-makanan",
                "makanan" => makanan::find($makanan)
            ]);
        }
}
