@extends('base')


@section ('principal')

<!-- Main Banner Starts -->
<div class="main-banner five">
	<div class="container">
        <h2><span>Contacto</span></h2>
	</div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
	<div class="container">
		<ul class="list-unstyled list-inline">
            <li><a href="/">Home</a></li>
            <li class="active">Contaco</li>
			
		</ul>
	</div>
</div>		

@if ($errors->any())
<div class="status alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(session()->has('message'))
    <div class="status alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
<!-- Contact Info Section Starts -->
	<div class="contact-info-box">
		<div class="row">
			<div class="col-md-5 col-xs-12 hidden-sm hidden-xs">
				<div class="box-img">
					<img src="images/contact/contact-info-box-img1.png" alt="Image" />
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="info-box">
					<h3>Nos encantaria oir acerca de ti!</h3>
					<h5>
						Brindamos atencion personalizada durante las 24 hs del dia. Nuestros operadores estaran dispuestos a asesorarlo para que su compra resulte satisfactoria.
					</h5>
					<div class="row">
						<h4 class="col-sm-6 col-xs-12">Tel: 221-228-8958</h4>
						<h4 class="col-sm-6 col-xs-12">Cel: 011-1245-4567</h4>
					</div>
					<h4>Email: <p href="mailto:fabiana@lyrasalud.com"> administracion@lyrasalud.com</p></h4>
				</div>
			</div>
			<div class="col-md-1 col-xs-12 hidden-sm hidden-xs"></div>
		</div>
	</div>
<!-- Contact Info Section Ends -->
<!-- Contact Content Starts -->
	<div class="contact-content">
		<div class="row">
		<!-- Contact Form Starts -->
			<div class="col-sm-8 col-xs-12">
				<h3>Realice su consulta mediante el siguiente formulario</h3>


				<form class="contact-form" name="contact-form" method="post" action="/contacto" role="form">
					{{csrf_field()}}
					<div class="row">
					<!-- Name Field Starts -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">Nombre </label>
								<input type="text" class="form-control" name="nombre" id="name" value="{{ old('nombre') }}">
							</div>
						</div>
					<!-- Name Field Ends -->
					<!-- Email Field Starts -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email </label>
								<input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
							</div>
						</div>
					<!-- Email Field Ends -->
					<!-- Phone No Field Starts -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="phoneno">Numero de Contacto </label>
								<input type="text" class="form-control" name="contacto" id="phoneno" value="{{ old('contacto') }}">
							</div>
						</div>
					<!-- Phone No Field Ends -->
					<!-- Subject Field Starts -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="subject">Asunto </label>
								<input type="text" class="form-control" name="asunto" id="subject" value="{{ old('asunto') }}">
							</div>
						</div>
					<!-- Subject Field Ends -->
					<!-- Message Field Starts -->
						<div class="col-xs-12">
							<div class="form-group">
								<label for="message">Su Consulta: </label>
								<textarea class="form-control" rows="8" name="mensaje" id="message" >{{ old('mensaje') }}</textarea>
							</div>
						</div>
					<!-- Message Field Ends -->
						<div class="col-xs-12">
							<input type="submit" class="btn btn-black text-uppercase" value="Enviar" >
						</div>
					</div>
				</form>
			</div>

		<!-- Contact Form Ends -->
		<!-- Address Starts -->
			<div class="col-sm-4 col-xs-12">
			<!-- Box #1 Starts -->
				<div class="cblock-1">
					<span class="icon-wrap"><i class="fa fa-car"></i></span>
					<h4>Venga a Visitarnos</h4>
					<ul class="list-unstyled">
						<li>Av. 60 1124 Depto. 8a, La Plata </li>
						<li>Buenos Aires, Argentina.</li>
						<li>221-228-8958</li>
					</ul>
				</div>
			<!-- Box #1 Ends -->
			<!-- Box #2 Starts -->
				<div class="cblock-1">
					<span class="icon-wrap red"><i class="fa fa-ambulance"></i></span>
					<h4>Tiene una Emergencia?</h4>
					<ul class="list-unstyled">
						<li>Si usted esta teniendo una emergencia,</li>
						<li>no espere para contactarnos.</li>
						<li>Llame al 221-228-8958</li>
					</ul>
				</div>
			<!-- Box #2 Ends -->
			</div>
		<!-- Address Ends -->
		</div>
	</div>
<!-- Contact Content Ends -->
</div>
<!-- Main Container Ends -->
<!-- Google Map Starts -->
<!--<div class="map"></div>-->
<!-- Google Map Ends -->	


@endsection
