<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LamparasController extends Controller
{
  public function listado(){

    $products = Product::where("category_id", "=", 9)
    ->orderBy("id")
    ->get();

    $vac=compact("products");

    return view("lamparas", $vac);
  }
}
