<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MesasController extends Controller
{
    public function listado(){

      $products = Product::where("category_id", "=", 5)
      ->orderBy("id")
      ->get();

      $vac=compact("products");

      return view("mesas", $vac);
    }
}
