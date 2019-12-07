<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function listado(){
      return view("mesas");
    }
}
