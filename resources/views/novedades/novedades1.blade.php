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
                Apostamos a seguir formándonos día a día para crecer académica y profesionalmente. <br>
                Por eso te ofrecemos cursos de capacitación especialmente desarrollados para mejorar la calidad de tu trabajo y brindarle nuevas oportunidades todo el tiempo.
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
                    
                    </div>
                    @endforeach
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

        </div>
    </div>
<!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->

@endsection