<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AlmohadonesController extends Controller
{
  public function listado(){

    $products = Product::where("category_id", "=", 7)
    ->orderBy("id")
    ->paginate(6);

    $vac=compact("products");

    return view("almohadones", $vac);
  }
}
