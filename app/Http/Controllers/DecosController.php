<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecosController extends Controller
{
  public function listado(){
    return view("deco");
  }
}
