<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class CuadrosController extends Controller
{
  public function listado(){
    $products = Product::where("category_id", "=", 6)
    ->orderBy("id")
    ->paginate(6);

    $vac=compact("products");
    return view("cuadros", $vac);
  }
}
