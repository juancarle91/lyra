@extends('base')

@section ('principal')

	<!-- Main Banner Starts -->
		<div class="main-banner seven">
			<div class="container">
				<h2><span>Nuestros Productos</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="/">Home</a></li>
					<li class="active">Productos</li>
				</ul>
			</div>
		</div>		
	<!-- Breadcrumb Ends -->
	<!-- Main Container Starts -->
	<div class="main-container-1 container">
		<!-- Heading Starts -->
			<h3 class="heading-1 text-center-xs"><strong>Productos</strong></h3>
		<!-- Heading Ends -->
		<!-- Content Starts -->
			<p>Comercializamos una amplia gama de productos para distintas disciplinas, sea bienvenido a buscar en las diferentes categorias.</p>
		<!-- Content Ends -->
		<!-- Spacer Starts -->
			<div class="spacer-small"></div>
		<!-- Spacer Ends -->
		<!-- Intro Boxes Starts -->
		<ul class="list-unstyled row intro-box text-center">
			@foreach ($categorias as $categoria)
			<li class="col-sm-4 col-xs-12">
				<div class="intro-box-item">
					<img src="{{ $categoria->foto }}" alt="Optical Solutions" class="img-responsive img-center images-product">
					<h4>{{ $categoria->titulo }}</h4>
				</div>
			</li>
			@endforeach
		</ul>
		<!-- Intro Boxes Ends -->
        </div>
    <!-- Main Container Ends -->
@endsection