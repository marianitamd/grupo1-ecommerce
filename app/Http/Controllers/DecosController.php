<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class DecosController extends Controller
{
  public function listado(){

    $products = Product::where("category_id", "=", 8)
    ->orderBy("id")
    ->get();

    $vac=compact("products");

    return view("deco", $vac);
  }
}
