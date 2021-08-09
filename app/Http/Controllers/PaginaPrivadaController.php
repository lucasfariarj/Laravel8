<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaPrivadaController extends Controller
{
    public function index(){
        return view('paginaprivada');
    }
}
