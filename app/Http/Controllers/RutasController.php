<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function inicio()
    {
        return view('inicio');
    }
    public function nosotros(){
        return view('vistas.es.nosotros');
    }
    public function contacto(){
        return view('vistas.es.contactenos');
    }
}
