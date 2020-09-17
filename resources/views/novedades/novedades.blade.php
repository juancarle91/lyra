@extends('base')

@section ('principal')

<!-- Main Banner Starts -->
<div class="main-banner two">
    <div class="container">
        <h2><span>Novedades</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="/">Home</a></li>
            <li class="active">Novedades</li>
        </ul>
    </div>
</div>		
<!-- Breadcrumb Ends -->
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
    <!-- Sidearea Starts -->
        <div class="col-md-3 col-xs-12">
            <!-- Categories Starts -->
            <h4 class="side-heading2 text-bold">Categorias</h4>
            <div class="list-group categories">
                @foreach ($categorias as $categoria)
                <a href="/productos/{{ $categoria->id }}" class="list-group-item">{{ $categoria->titulo }}</a>
                @endforeach
            </div>
            <!-- Categories Ends -->
       
        </div>
    <!-- Sidearea Ends -->
    </div>
<!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->

@endsection