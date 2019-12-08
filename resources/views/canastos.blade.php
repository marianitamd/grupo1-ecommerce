@extends('layouts.generic')

@section('content')

<div class="container">
      <div class="jumbotron">
      <h1 class="display-4"class="center" ><b>CANASTOS & CONTENEDORES</b></h1>
      <p class="lead"> Organizate, la manera más práctica y linda de organizar tus espacios!</p>
      <hr class="my-4">

          </div>
</div>

<main>

  <section class="row">

  @foreach ($products as $product )

    <article>
    <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="{{ asset('storage/img/'.$product->img) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="#" class="INDEX">{{$product->name}}</a></h5>
    <p class="card-text"> $ {{$product->price}} </p>
    <br>
    <p class="card-text"> <b> HASTA  12 CUOTAS</b></p>
    </div>
</div>
  </article>

    @endforeach

  </section>


</main>

@endsection
