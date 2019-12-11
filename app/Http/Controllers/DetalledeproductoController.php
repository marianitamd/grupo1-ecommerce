<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;


class DetalledeproductoController extends Controller
{
      public function detalle($id){

        $products = Product::find($id);

        $vac=compact("products");
        return view('detalledeproducto', $vac);
        }

};
