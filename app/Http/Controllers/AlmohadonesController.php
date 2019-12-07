<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlmohadonesController extends Controller
{
  public function listado(){
    return view("almohadones");
  }
}
