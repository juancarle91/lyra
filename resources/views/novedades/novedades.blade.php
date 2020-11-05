@extends('base')

@section ('principal')

<!-- Main Banner Starts -->
<div class="main-banner two">
    <div class="container">
        <h2><span>Capacitación</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="/">Home</a></li>
            <li class="active">Capacitación</li>
        </ul>
    </div>
</div>		
<!-- Breadcrumb Ends -->
<section id="capacitacion">
    <div id="capacitacion-principal">

        <div id="texto-capacitacion">
            <h2 class="texto-capacitacion-h2">
                Ponemos nuestro equipo, conocimiento y experiencia, al servicio de tu negocio para  optimizar  tus prestaciones de salud
            </h2>
        </div>
        
    </div>
</section>
<!-- Main Container Starts -->
<div class="container main-container">
<!-- Nested Row Starts -->
    <div class="row">
    <!-- Mainarea Starts -->
        <div class="col-md-9 col-xs-12">
        <!-- News Post List Starts -->
            <div class="news-post-list">
            <!-- News Post #1 Starts -->
                <article class="news-post">
                    @foreach ($novedades as $novedad)
                    <img src="{{ $novedad->foto }}" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                    <div class="inner">
                        <h4>
                            <p>{{ $novedad->titulo }}</p>
                        </h4>
                    
                        <p>
                            {{ $novedad->texto1 }}
                        </p>
                        <p>
                            {{ $novedad->texto2 }}
                        </p>
                        @endforeach
                    </div>
                </article>
            <!-- News Post #1 Ends -->

            </div>
        <!-- News Post List Ends -->
        
        </div>
    <!-- Mainarea Ends -->
        <div class="col-sm-3 col-xs-12">
    
                    
            <!-- Spacer Starts -->
            <div class="spacer-small"></div>
            <!-- Spacer Ends -->
        
            <!-- Spacer Starts -->
            <div class="spacer-extra-small"></div>
            <!-- Spacer Ends -->
            <!-- Information Starts -->
            <h4 class="side-heading2 text-bold">Información</h4>
            <div class="list-group categories">
                <a href="/sobre-nosotros" class="list-group-item">Sobre Nosotros</a>
                <a href="/servicios" class="list-group-item">Servicios</a>
                <a href="/novedades" class="list-group-item">Novedades</a>
                <a href="/contaco" class="list-group-item">Contacto</a>
            </div>
            <!-- Information Ends -->
        </div>
    </div>
<!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->

@endsection