<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function index()
    {
        return view('conversion'); // Asegúrate de que este nombre coincida con tu archivo conversion.blade.php
    }
}
