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

    <div class="row">
    <!-- Product #1 Starts -->
        @foreach ($novedades as $novedad)
        <div class="col-md-4 col-sm-6 col-xs-12">          
            <div class="product-col">
            <!-- Product Image Starts -->
                <div class="product-col-img">
                    <img src="{{ asset($novedad->foto) }}" alt="Product Image" class="img-responsive img-center images-product">

                </div>
            <!-- Product Image Ends -->
                <h2 class="product-col-name">{{ $novedad->titulo }}</h6>
                <p>
                    {{ $novedad->texto1 }}
                </p>
                <p>
                    {{ $novedad->texto2 }}
                </p>
            </div>
        </div>
        @endforeach  
        <!-- Product #1 Ends -->          
    </div>



@endsection