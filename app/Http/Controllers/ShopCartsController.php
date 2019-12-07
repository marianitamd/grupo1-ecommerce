<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopCartsController extends Controller
{
  public function listado(){
    return view("shopCart");
  }
}
