<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        return view('nosotros'); // Asegúrate de que este nombre coincida con tu archivo nosotros.blade.php
    }
}
