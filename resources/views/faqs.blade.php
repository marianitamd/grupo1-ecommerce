@extends('layouts.generic')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<div class="container">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              MEDIOS DE PAGO
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <b>¿Cómo puedo realizar un pedido?</b><br><br>Una vez elegido el producto, presioná el botón Agregar al Carrito y verás en tu carrito los artículos que tenés cargados. Podés modificar la cantidad o eliminar los que desees. En este punto encontrarás los medios de pagos y promociones que están disponibles en nuestra Tienda Online. Para continuar con la compra deberás seleccionar un método de envío, para eso, tenés que ingresar tu código postal y se te desplegarán las sucursales disponibles para retiro en tu zona y el costo de envío a domicilio. Seleccioná el método que prefieras y hacé click en "Pagar". En el paso siguiente vas a tener que ingresar una serie de datos personales para confeccionar la factura de tu compra. Aunque hayas elegido retirar en sucursal, la plataforma te solicitará algunos datos de "Envío", no te preocupes, son sólo datos de facturación. Tu pedido se enviará a la sucursal elegida. Deberás elegir el método de pago mediante el cual querés abonar y se te informará el resultado de la operación.
              ¡Listo! ¿Fácil no? A la brevedad nos pondremos en contacto para coordinar la entrega de tu producto.</p>
            <p class="card-text"><b>¿Cuáles son los medios de pago?</b><br><br>Podés abonar a través de Mercado Pago en cuotas fijas y sin interés. Para ver las promociones vigentes hacé click acá. También podés pagar con dinero en tu cuenta de Mercado Pago y podés consultarnos a través de ventasonline@happyhome.com.ar por pagos a través de Transferencia Bancaria.</p>
            <p class="card-text"><b>¿Puedo pagar en cuotas?</b><br><br>Si. Podés ver aquí los costos por abonar tu compra en cuotas. También podés ver aquí las promociones de cuotas sin interés con los distintos bancos.<p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              FORMAS DE ENVÌO
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <b>¿Realizan envíos?</b><br><br>Si. Hacemos envíos a todo el país. El costo de envío depende del tamaño del producto y la provincia a la que quieras enviarlo, podés consultarlo en la publicación del producto, debajo del precio y los medios de pago, en la sección que dice “Consultar costos de envío”. También podés consultar el costo del total de tus productos en el carrito de compras. Para esto, tenés que ingresar tu código postal y se te desplegarán tanto las sucursales disponibles para retiro como el costo de envío a tu domicilio.</p>
            <p class="card-text"><b>¿Cuáles son los tiempos de entrega?</b><br><br>Los tiempos de entrega dependerán de los productos que compres y del lugar de entrega. Cuando se realiza un envío dentro de CABA y hasta 50 km, se entregará en su domicilio dentro de los 4 días hábiles posteriores al despacho.En GBA y el interior del país demorará como máximo 7 días hábiles. Salvo las provincias más alejadas, en las que puede demorar un poco más.El correo entregará en domicilio dentro de la franja horaria de lunes a viernes de 9 a 17 hs.Los muebles, dentro de CABA y hasta 50 km se envían sólo los días miércoles y se entregan en de la franja horaria de 10 a 17 hs previa coordinación.</p>
            <p class="card-text"><b>¿Quién puede recibir mi pedido?</b><br><br>Puede recibir tu pedido cualquier persona mayor de 18 años. Si va a ser otra la persona que va a recibirlo, te pedimos que lo aclares al momento de realizar el pedido.<p>
            <p class="card-text"><b>¿Qué pasa si el correo viene a domicilio y no me encuentra?</b><br><br>El correo irá a tu domicilio en dos oportunidades. En caso de que no se encuentre nadie capaz de recibir el pedido en el domicilio, el paquete volverá a la Sucursal de Oca y estará allí los siguientes cinco días. Contactanos para coordinar su retiro.<p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ATENCIÓN AL CLIENTE
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <b>¿Se puede retirar en alguno de los locales Happy Home?</b><br><br>Si. Podés retirar tu producto en nuestras sucursales habilitadas para retiro de productos. Hacé click acá para conocerlas.
            Una vez acreditada la compra, podrás retirar tu pedido dentro de los 4 días hábiles posteriores, dependiendo de la sucursal que hayas elegido. Cuando esté listo el pedido, se te enviará un email automático informándotelo y con la factura adjunta. A partir de ese momento tenés 30 días para retirar tu pedido en el local.</p>
            <p class="card-text"><b>¿Quién puede retirar el pedido y qué necesita para retirarlo?</b><br><br>Puede retirar tu pedido cualquier persona mayor de 18 años. En caso de que el pedido sea retirado por una persona distinta al titular de la compra, el titular deberá enviarnos un email a ventasonline@happyhome.com.ar con los datos de la persona autorizada (Nombre, Apellido, DNI). Al acercarse a línea de caja, podrán retirar cualquiera de los dos únicamente con el nombre de la persona titular del pedido o el número de operación.</p>
            <p class="card-text"><b>¿Qué tipo de facturas emiten?</b><br><br>Emitimos factura "B" y "A". Si necesitás factura "A" Al momento de la compra seleccioná la opción "Soy una persona jurídica" y completá los datos. Además, te pedimos que nos envíes un email o nos dejes un comentario para solicitar la factura A.<p>
          </div>
        </div>
      </div>
    </div>
</div>

        <div class="card" class="atencion" >
        <!--<img src="" class="card-img-top" alt="...">-->
          <div class="card-body">
            <h5 class="card-title">ATENCIÓN AL CLIENTE</h5><br>
            <p class="card-text">
            <p class="card-text"><b>Tengo una pregunta que no está en la lista</b><br><br>Contactate con nosotros. 011-48285600. ventasonline@happyhome.com.ar<p>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>

@endsection
