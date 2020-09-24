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
            <li><a href="/productos">Productos</a></li>
            <li class="active">{{$categoria->titulo}}</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Nested Row Starts -->
        <div class="row">
        <!-- Sidearea Starts -->
            <div class="col-sm-3 col-xs-12">
            <!-- Categories Starts -->
                <h4 class="side-heading2 text-bold">Categorías</h4>
                <div class="list-group categories">
                    @foreach ($categorias as $cat)
                    <a href="/productos/{{ $categoria->id }}" class="list-group-item"> {{$cat->titulo}} </a>
                    @endforeach
                </div>
            <!-- Categories Ends -->
            
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
        <!-- Sidearea Ends -->
        <!-- Mainarea Starts -->
            <div class="col-sm-9 col-xs-12">
            <!-- Page Heading Starts -->

                <h3 class="page-heading1">{{$categoria->titulo}}</h3>
                <p>{{$categoria->descripcion}}</p>
            <!-- Page Heading Ends -->
            <!-- Search form -->
            <!--<div class="md-form mt-0" method='get' action='/productos/{categoria}'>
                <input class="form-control" type="text" placeholder="Busqueda" aria-label="Search"  >
            </div>-->

            <form class="form-inline mr-auto" method="get" action="/productos/{{$categoria->id}}">
                {{csrf_field()}}
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>

            <!-- Spacer Starts -->
                <div class="spacer-small"></div>
            <!-- Spacer Ends -->
            
            <!-- Spacer Starts -->
                <div class="spacer"></div>
            <!-- Spacer Ends -->
           
            <!-- Product Grid Display Starts -->
                <div class="row">
                <!-- Product #1 Starts -->
                @foreach ($productos as $producto)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        
                        <div class="product-col">
                        <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="{{ $producto->foto }}" alt="Product Image" class="img-responsive img-center">
                            <!-- Overlay Starts -->
                                <!--<div class="overlay animation">-->
                                <!-- Buttons Starts -->
                                    <!--<ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Quick View</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Add To Cart</a></li>
                                    </ul>-->
                                <!-- Buttons Ends -->
                                <!-- </div> -->
                            <!-- Overlay Ends -->
                            </div>
                        <!-- Product Image Ends -->
                            <h6 class="product-col-name"><p>{{ $producto->titulo }}</p></h6>
                            <!--<div class="product-col-price">
                                <span class="product-col-price-new">$65.00</span>
                                <span class="product-col-price-old">$90.00</span>
                            </div>
                            <ul class="list-unstyled clearfix product-col-list">
                                <li class="pull-left"><a href="#">Add to Wishlist</a></li>
                                <li class="pull-right"><a href="#">Add to Compare</a></li>
                            </ul>-->
                        </div>
                        
                    </div>
                    @endforeach
                <!-- Product #1 Ends -->
                
                {{ $productos->links() }}
                </div>
            <!-- Product Grid Display Ends -->
            <!-- Spacer Starts -->
                <div class="spacer-medium"></div>
            <!-- Spacer Ends -->
            <!-- Pagination & Results Starts -->
                <div class="pagination-wrap inverse clearfix">


                </div>
            <!-- Pagination & Results Ends -->
            </div>
        <!-- Mainarea Ends -->
        </div>
    <!-- Nested Row Ends -->
    </div>
<!-- Main Container Ends -->
@endsection
