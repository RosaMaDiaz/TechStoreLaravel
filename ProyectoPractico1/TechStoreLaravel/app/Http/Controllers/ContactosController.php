<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index()
    {
        return view('contactos'); // Asegúrate de que este nombre coincida con tu archivo contactos.blade.php
    }
}
