@extends('layouts.generic')

@section('content')

  <section class="logo">

    <a href="{{URL::to('/')}}"><img src={{asset('img/logo.png')}} alt="Logo"></a>
    <nav class="barra-bajo-logo">
          <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="#"><p class="text-body">Nuestra historia</p></a>
              </li>
          <li class="nav-item">
                <a class="nav-link" href="#"><p class="text-body">Conocenos</p></a>
              </li>

          </ul>
    </nav>

</section>

  <main>


    <section class="row">

      <article>
      <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
    <img class="producto" src="https://http2.mlstatic.com/cuadros-modernos-nordicos-decoracion-frases-hojas-y-mas-D_NQ_NP_729354-MLA28763062763_112018-F.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cuadros</h5>
      <p class="card-text">Dale vida a tus paredes</p>
      <a href="cuadros" class=>más +</a>
    </div>
  </div>
    </article>

    <article>
        <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
    <img class="producto" src="https://i.pinimg.com/originals/72/37/ea/7237ea2ec78c226622373e09e3020f6b.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Deco</h5>
    <p class="card-text"> El foco está en los detalles</p>
    <a href="deco" class=>más +</a>
    </div>
    </div>
    </article>

    <article>
        <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
    <img class="producto" src="https://img1.kenayhome.com/45711/cross-mesa-cristal-natural.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Mesas</h5>
    <p class="card-text"> Armá tus espacios </p>
    <a href="mesas" class=>más +</a>
    </div>
    </div>
    </article>

    <article>
        <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="https://co.habcdn.com/photos/project/medium/lamparas-vintage-filamento-led-para-restaurantes-bares-y-sitios-de-decoracion-rustica-160800.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lámparas</h5>
    <p class="card-text">Dale luz!</p>
    <a href="lamparas" class=>más +</a>
  </div>
  </div>
  </article>

  <article>
      <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="https://d26lpennugtm8s.cloudfront.net/stores/855/231/products/09-teo1-20c557c331228d28a815335860686732-1024-1024.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Canastos & Contenedores</h5>
  <p class="card-text"> Tu organización más fácil </p>
  <a href="canastos" class=>más +</a>
  </div>
  </div>
  </article>

  <article>
      <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="https://www.sodimac.cl/static/Homy/html/blog-Homy/inspiracion-y-decoracion/cojines-origenes-y-decoracion/4-lo-que-no-sabias-de-cojines-mejor-herramienta-decorativa-animal-print-grises-rosa-cuarzo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Almohadones</h5>
  <p class="card-text"> Buscá estar cómodo</p>
  <a href="almohadones" class=>más +</a>
  </div>
  </div>
  </article>

    </section>
  </main>

@endsection
