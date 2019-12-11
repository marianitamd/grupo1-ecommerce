@extends('layouts.generic')

@section('content')

  <article class="" style="width:100%; height: 700px; overflow: hidden;">
    <div class="imagen" style="background-color: white; width:42%; height: 400px; border:black 1px  solid; float: left; margin-left: 15%; margin-top: 20px;border-top-left-radius: 10px;border-bottom-left-radius: 10px; padding: 10px >
    <div class="img-magnifier-container">
    <img id="myimage" src=" class="card-img-top" alt="FailedToLoad" style=" width: 100%; height: 100%; box-sizing: border-box; border-radius: 10px;">
  </div>
    </div>
    <div class="producto" style="background-color:white; width:28%; height: 400px; border:black 1px solid; margin-top: 20px; float: left; padding: 10px; border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
    <p style="font-weight: bold; font-size: 30; text-align: center"> {{$products->['name']}} </p>
  <button type="button" name="button" style="color: blue">Agregar al carrito</button>
    </div>
    <div class="descripcion" style="background-color: white; width:70%; height: 200px; border-bottom: :black 2px  solid; float: left; margin-left: 15%; margin-top: 10px; border-radius: 10px; border: black 1px solid; padding: 10px">
      <p style="font-size: 20; font-style: normal; font-weight: bold">Caracteristicas Del Producto:</p>
      <p>ACA VA TODO LO DE SQL </p>
    </div>
  </article>


@endsection
