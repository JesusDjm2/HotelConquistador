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
    public function nosotros()
    {
        return view('vistas.es.nosotros');
    }
    public function contactenos()
    {
        return view('vistas.es.contactenos');
    }

    ///Vistas en ingles
    public function contact()
    {
        return view('vistas.en.contact');
    }
    public function about()
    {
        return view('vistas.en.about');
    }
}
