@extends('base')
@section ('principal')

<!-- Main Banner Starts -->
<div class="main-banner seven">
	<div class="container">
		<h2><span>Nuestros Servicios</span></h2>
	</div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
	<div class="container">
		<ul class="list-unstyled list-inline">
			<li><a href="/">Home</a></li>
			<li class="active">Nuestros Servicios</li>
		</ul>
	</div>
</div>		
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
	<!-- Services Tab Starts -->
		<div class="tabs-wrap">
		<!-- Nav Tabs Starts -->
			<ul class="nav nav-tabs">
				<li class="">
					<a href="" aria-controls="tab-1" data-toggle="tab">
						<div class="icon hidden-sm hidden-xs">
							<img src="images/icons/band-aid.png" alt="Band Aid">
						</div>
						<h5>COMERCIALIZACION</h5>
					</a>
				</li>


				<li>
					<a href="#tab-4" aria-controls="tab-4" data-toggle="tab">
						<div class="icon hidden-sm hidden-xs">
							<img src="images/icons/nurse.png" alt="Qualified Doctors">
						</div>
						<h5>CAPACITACION</h5>
					</a>
				</li>

				<li>
					<a href="#tab-6" aria-controls="tab-6" data-toggle="tab">
						<div class="icon hidden-sm hidden-xs">
							<img src="images/icons/stethoscope.png" alt="Pulmonary">
						</div>
						<h5>ASESORAMIENTO</h5>
					</a>
				</li>
			</ul>
		<!-- Nav Tabs Ends -->
		<!-- Tab Content Starts -->
			<div class="tab-content">
			<!-- Tab #1 Starts -->
				<div class="tab-pane fade in active" id="tab-1">
					<div class="row">
					<!-- Box #1 Starts -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="box1 text-center-xs">
								<img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
								<div class="inner">
									<h4>Comercialización</h4>
									<p>
										
										Ofrecemos una amplia variedad de equipamiento e insumos médicos para satisfacer las necesidades más exigentes.
									</p>
								</div>
							</div>
						</div>
					<!-- Box #1 Ends -->
					<!-- Box #2 Starts -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="box1 text-center-xs">
								<img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
								<div class="inner">
									<h4>Asesoramiento</h4>
									<p>
										Somos el socio perfecto de toda empresa o institución de salud.
									</p>
									
								</div>
							</div>
						</div>
					<!-- Box #2 Ends -->
					<!-- Box #3 Starts -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="box1 text-center-xs">
								<img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
								<div class="inner">
									<h4>Capacitación</h4>
									<p>
										Brindamos cursos de capacitación y formación profesional integral en relación a la sanidad.
									</p>
									
								</div>
							</div>
						</div>
					<!-- Box #3 Ends -->
									
					</div>
				</div>
			<!-- Tab #1 Ends -->
			</div>
		<!-- Tab Content Ends -->
		</div>
	<!-- Services Tab Ends -->
	</div>
<!-- Main Container Ends -->

@endsection
