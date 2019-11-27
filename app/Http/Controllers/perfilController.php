<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Registro;

class RegistroController extends Controller {
  public function registrar (Request $form){
    $registro = new Registro();

    $registro->email = $form["email"];
    $registro->password = $form["password"];

    $registro -> save();

    return redirect ("/perfil");
  }
};

class RegistroController extends Controller {
 public function actualizar (Request $form, $id){
     $registro = Registro::find($id);

      $registro->email = $form["email"];
      $registro->password = $form["password"];

      $registro -> save();

      return redirect ("/index");
    }
};
