<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LamparasController extends Controller
{
  public function listado(){
    return view("lamparas");
  }
}
