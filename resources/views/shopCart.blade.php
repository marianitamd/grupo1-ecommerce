<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesshop.css">
    <title></title>
  </head>
  <body>


@extends('layouts.generic')

@section('content')

<div class="container">
        <header class="titulo">

        <h1>Mis compras</h1>


      </header>

      <div class="totalCompra">

            <section class="buy" >
                  <article class="">
                    <img class="fotoProducto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRT-2bddjYA7m7dKtg9939ol4c1pF3EXrSPAcZ32w3W5f6ELdT7" alt="">
                  <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris n.
                  </div>
                  <div class="price">
                    Precio <br> $
                  </div>
                  <div class="q">
                    <form action="shopCart" method="get">
                      <label for="Cantidad">Cantidad</label>
                      <select name="Cantidad" id="Cantidad">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      </select>
                    </form>
                  </div>
                  <div class="subtotal">
                    Subtotal <br> $
                  </div>

                  </article>

            </section>

            <nav class="resumen">

                    <div id="resumen-de-compra">
                        <h5>Resumen de Compra</h5>
                    </div>

                    <ul id="totales">
                      <li id="subtotal">
                        <label>Subtotal</label>
                        <span>$1100</span>
                      </li>
                      <li id="total">
                        <label>Total</label>
                        <span>$1100</span>
                      </li>
                    </ul>

                    <div class="comprar-mas">

                        <button type="button" class="btn btn-link">Seguí comprando!</button>

                    </div>

                    <div class="finalizar-compra">

                        <button type="button" class="btn btn-info">Realizá tu compra</button>

                    </div>

            </nav>
       </div>

</div>


@endsection


</body>
</html>
