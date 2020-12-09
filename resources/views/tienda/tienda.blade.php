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
            <li class="active">Nuestros Productos</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Nested Row Starts -->
        <div class="row" id="tienda-productos">
        <!-- Sidearea Starts -->

        <!-- Sidearea Ends -->
        <!-- Mainarea Starts -->
            <div class="col-sm-9 col-xs-12">
            <!-- Page Heading Starts -->

                <h3 class="page-heading1">{{$categoria->titulo}}</h3>
                <p>Ofrecemos una amplia variedad de insumos y equipamientos sanitarios para todo tipo de necesidades y usos. Nos caracterizamos por la calidad de nuestros productos y la predisposición por tener siempre las últimas novedades del mercado para vos.</p>
            <!-- Page Heading Ends -->
            <!-- Search form -->
            <!--<div class="md-form mt-0" method='get' action='/productos/{categoria}'>
                <input class="form-control" type="text" placeholder="Busqueda" aria-label="Search"  >
            </div>-->

            <!--<form class="form-inline mr-auto" method="get" action="/productos/ // agregar llaves $categoria->id}}">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search" name="keyword">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>-->

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
                                <img src="{{ asset($producto->foto) }}" alt="Product Image" class="img-responsive img-center images-product">
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
        <h2 id="tienda-final-texto">Contactanos para conocer todos nuestros productos</h2>

        <div class="container main-container no-margin-top">
            <!-- Book Appointment Box Starts -->
            <!--<div class="book-appointment-box">
                <div class="row">
                    <div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
                        <h4>Asistencia Telef&oacute;nica</h4>
                        <h3><i class="fa fa-phone-square"></i> 221-228-8958</h3>
                    </div>
                    <div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
                        <a href="doctor-profile.html" class="btn btn-main text-uppercase">cont&aacute;ctenos</a>
                    </div>
                    <div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
                        <div class="box-img">
                            <img src="images\nurse-transparente.png" class="nurseTransparente" alt=""/>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Book Appointment Box Ends -->
        </div>
        
        <div class="tarjetas-gris">
            <h2 class="texto-tarjetas">Trabajamos con tarjetas de crédito</h2>
            <div class="img-tarjeta">
                <img src="{{ asset ('images/visa.png') }} ">
                <img src="{{ asset ('images/master.png') }} ">
                <img src="{{ asset ('images/cabal.png') }} ">
                <img src="{{ asset ('images/union.png') }} ">
            </div>  
        </div>
        <!-- Main Container Starts -->
        <div class="container main-container no-margin-top">
            <!-- Book Appointment Box Starts -->
            <!--<div class="book-appointment-box">
                <div class="row">
                    <div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
                        <h4>Asistencia Telef&oacute;nica</h4>
                        <h3><i class="fa fa-phone-square"></i> 221-228-8958</h3>
                    </div>
                    <div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
                        <a href="doctor-profile.html" class="btn btn-main text-uppercase">cont&aacute;ctenos</a>
                    </div>
                    <div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
                        <div class="box-img">
                            <img src="images\nurse-transparente.png" class="nurseTransparente" alt=""/>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Book Appointment Box Ends -->
        </div>

    </div>
<!-- Main Container Ends -->
@endsection
