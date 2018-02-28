<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Hula Hula</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/metodos.js') }}"></script>
<body data-spy="scroll" data-target="#navbar-example">
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"><img src="../images/logo_li.jpg" id="logo"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#paquetes">Paquetes</a></li>
          <li><a href="#horario">Horarios y pagos</a></li>
          <li><a href="#ubicacion">Ubicacion</a></li>
          <li><a href="#acerca">Acerca de Nosotros</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div id="col1">
<div id="inicio" class="container">
  <h2>Galeria</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/salon1.jpeg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="../images/salon2.jpeg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../images/salon3.jpeg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="../images/salon4.jpeg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../images/salon11.jpeg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="../images/salon12.jpeg" alt="Chicago" style="width:100%;">
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-menu-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-menu-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<div id="col2">
<div id="paquetes" class="row">
	<div>
		<h1 align="center">Paquetes</h1>
	</div>

<div class="col-md-3" >
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#basico">Paquete Basico</button>

<!-- Modal -->
<div id="basico" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Basico</h4>
      </div>
      <div class="modal-body" id="col1">
        <p>Renta por 5 Horas, 40 litros de agua fresca , 1 piñata con dulces, 1 bolsa grande de palomitas y Hielo</p>
        <p>Precio de paquete: $4500</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
</div>

<div class="col-md-3">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#paquete1">Paquete 1</button>

<!-- Modal -->
<div id="paquete1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Basico + Paquete 1</h4>
      </div>
      <div class="modal-body" id="col2">
        <p>Basico + 15 aguinaldos, 1 paquete de desechables para el pastes, 1 pastel para 100 personas y 10 regalos para los asistentes</p>
        <p>Precio de paquete: $4500 + $2350</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
</div>

<div class="col-md-3">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#paquete2">Paquete 2</button>

<!-- Modal -->
<div id="paquete2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Basico + Paquete 2</h4>
      </div>
      <div class="modal-body" id="col3">
        <p>Basico + 20 aguinaldos, 1 paquete de desechables para el pastes, 1 pastel para 100 personas y 15 regalos para los asistentes</p>
        <p>Precio de paquete: $4500 + $3000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

</div>
<div class="col-md-3">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#paquete2">Extras</button>

<!-- Modal -->
<div id="paquete2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Extras</h4>
      </div>
      <div class="modal-body" id="col3">
        <p>150 Hot-Dogs con complementos $2000</p>
        <p>Mesa de dulces con atencion durante el evento $1500</p>
        <p>10 Aguinaldos extras $250</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

</div>

<div class="col-md-3">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#paquete3">Paquete 3</button>

<!-- Modal -->
<div id="paquete3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Basico + Paquete 3</h4>
      </div>
      <div class="modal-body" id="col4">
        <p>Basico + 1 bolsa de papas, 25 aguinaldos, 1 paquete de desechables para el pastes, 1 pastel para 100 personas y 20 regalos para los asistentes</p>
        <p>Precio de paquete: $4500 + $3500</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>

<div id="horario">
	<div id="col3">
		<div class="col-md-6" id="col3">
			<h3>Horario</h3>
			<h4>Matutino</h4>
			<p>9:00 am a 2:00 pm</p>
			<h4>Vespertino</h4>
			<p>4:00 pm a 9:00 pm</p>
		</div>
		<div class="col-md-6" id="col3">
			<h3>Pagos</h3>
			<p>Los Pagos se realizaran Unicamente en Efectivo con el propietario de la empresa</p>
			<p>para contratar el servicio contactarnos al Telefono 618 455 5338 </p>
			<p>Tambien Puedes escribirnos al correo </p>
			<p>O asistir directamente al salon</p>
		</div>
	</div>
</div>


<div class="row" id="ubicacion">
	<div class="row">
	<div class="col-md-12" id="col4">
		<h2 align="center">Ubicacion</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.2491759348763!2d-104.55607678545083!3d24.02227678445609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb0afe49269e1%3A0x43644f8b73e439ad!2sUniversidad+Politecnica+de+Durango!5e0!3m2!1ses-419!2smx!4v1519145240309" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen id="mapa"></iframe>
	</div>
	</div>
</div>
</body>
</htm