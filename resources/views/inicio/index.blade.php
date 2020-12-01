@extends('base')
@section ('principal')
<!-- Slider Section Starts -->
<section id="seccion-home">
    <div >
        <!-- Slide Starts -->
        @foreach ($slides as $slide)
        <img src="{{ asset($slide->foto) }}" id="imagen-home">
        
        @endforeach
        <!-- Slide Ends -->
    </div>
</section>
<!-- Slider Section Ends -->
<!-- Main Container Starts -->
<div class="container">
<!-- Intro Section Starts -->
<section class="intro text-center">
    <!-- Heading Starts -->
    <h2 class="main-heading1 lite">Te acompañamos día a día para cuidar tu salud y la de todos </h2>
    <h2 class="main-heading2 text-center">con los mejores insumos médicos, tecnología y capacitación del mercado.</h2>
    <br>
    <!-- Heading Ends -->
    <!-- Content Starts -->
 
    <!-- Content Ends -->
    <!-- Intro Boxes Starts -->
    <ul class="list-unstyled row intro-box text-center">
        @foreach ($categorias as $categoria)
        <li class="col-sm-4 col-xs-12">
            <a href="/{{$categoria->titulo}}"><div class="intro-box-item">
                <img src="{{ $categoria->foto }}" alt="Optical Solutions" class="img-responsive img-center images-product">
                <h4>{{ $categoria->titulo }}</h4>
            </div></a>
        </li>
        @endforeach
    </ul>
    <!-- Intro Boxes Ends -->
</section>
<!-- Intro Section Ends -->
<!-- Product Section Starts -->
<section class="products-section">
    <!-- Heading Starts -->
    <h4>Nuestros Productos</h4>
    <!-- Heading Ends -->
    <!-- Tabs Starts -->
    <div class="tabs-panel products-section-tabs">
        <!-- Nav Tabs Starts -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#featured-products">Ofertas</a></li>
        </ul>
        <!-- Nav Tabs Ends -->
        <!-- Tab Content Starts -->
        <div class="tab-content clearfix">
            <!-- Featured Products Starts -->
            <div class="tab-pane fade in active" id="featured-products">
                <!-- Products Nested Row Starts -->
                <div class="row">
                    <!-- Product #1 Starts -->
                    @foreach ($productos as $producto)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="{{ $producto->foto }}" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <!--<div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <!--<ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Agrandar</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Cotizar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                <!--</div> -->
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name">{{ $producto->titulo }}</h6>
                        </div>
                    </div>
                    @endforeach
                    <!-- Product #1 Ends -->
                </div>
                <!-- Products Nested Row Ends -->
            </div>
            <!-- Featured Products Ends -->
            <!-- Latest Products Starts -->
            <div class="tab-pane fade" id="latest-products">
                <!-- Products Nested Row Starts -->
                <div class="row">
                    <!-- Product #1 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="/images/lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #1 Ends -->
                    <!-- Product #2 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #2 Ends -->
                    <!-- Product #3 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="/images/lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #3 Ends -->
                    <!-- Product #4 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #4 Ends -->
                </div>
                <!-- Products Nested Row Ends -->
            </div>
            <!-- Latest Products Ends -->
            <!-- Special Products Starts -->
            <div class="tab-pane fade" id="special-products">
                <!-- Products Nested Row Starts -->
                <div class="row">
                    <!-- Product #1 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #1 Ends -->
                    <!-- Product #2 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #2 Ends -->
                    <!-- Product #3 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #3 Ends -->
                    <!-- Product #4 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #4 Ends -->
                    <!-- Product #5 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #5 Ends -->
                    <!-- Product #6 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #6 Ends -->
                    <!-- Product #7 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #7 Ends -->
                    <!-- Product #8 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="product-col">
                            <!-- Product Image Starts -->
                            <div class="product-col-img">
                                <img src="images\lentes1.jpg" alt="Product Image" class="img-responsive img-center images-product">
                                <!-- Overlay Starts -->
                                <div class="overlay animation">
                                    <!-- Buttons Starts -->
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-block btn-grey" href="#">Vista r&aacute;pida</a></li>
                                        <li><a class="btn btn-block btn-secondary" href="#">Presupuestar</a></li>
                                    </ul>
                                    <!-- Buttons Ends -->
                                </div>
                                <!-- Overlay Ends -->
                            </div>
                            <!-- Product Image Ends -->
                            <h6 class="product-col-name"><a href="#">Lentes Negros 12cm</a></h6>
                        </div>
                    </div>
                    <!-- Product #8 Ends -->
                </div>
                <!-- Products Nested Row Ends -->
            </div>
            <!-- Special Products Ends -->
        </div>
        <!-- Tab Content Ends -->
    </div>
    <!-- Tabs Ends -->
</section>
<!-- Product Section Ends -->
</div>
<!-- Main Container Ends -->


<div id="contacto-home1">                    
    <section id="contacto-home">
        
        <div id="texto-contacto">
            <h2 id="texto-contacto-h2">Seguinos en redes y agreganos en WhatsApp para conocer todas nuestras novedades y consultar por nuestros productos o cursos de capacitación.</h2>
            <a href="/contacto" class="btn btn-main"><p>Contactanos</p></a>
        </div>
        <div id="foto-contacto">
            <img src="images/contacto.png" alt="image" class="img-responsive img-style1" id="foto-contacto1">
        </div>
    
    </section>
</div>

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
<!-- Main Container Ends -->


@endsection