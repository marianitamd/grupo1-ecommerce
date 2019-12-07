<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CanastosController extends Controller
{
  public function listado(){
    return view("canastos");
  }
}
