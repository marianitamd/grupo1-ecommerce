<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function detalle($id){
      $vac = compact ("id");
      return view ("detalleProducto", $vac);
    }
}
