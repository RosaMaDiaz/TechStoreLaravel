<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('inicio'); // Asegúrate de que este nombre coincida con tu archivo inicio.blade.php
    }
}
