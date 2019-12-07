<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadrosController extends Controller
{
  public function listado(){
    return view("cuadros");
  }
}
