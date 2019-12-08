<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CanastosController extends Controller
{
  public function listado(){

    $products = Product::where("category_id", "=", 10)
    ->orderBy("id")
    ->get();

    $vac=compact("products");

    return view("canastos", $vac);
  }
}
