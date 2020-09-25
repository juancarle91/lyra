@extends('base')
@section ('principal')
<!-- Slider Section Starts -->
<section class="slider clearfix">
    <div id="camera_wrap_1" class="camera_wrap camera_white_skin">
        <!-- Slide Starts -->
        @foreach ($slides as $slide)
        <div data-src="{{ $slide->foto }}">
            <div class="camera_caption fadeFromLeft hidden-sm hidden-xs">
                <h2>{{ $slide->titulo}}</h2>
                <p>{{ $slide->texto}}</p>
                <a href="{{ $slide->link }}" class="btn btn-secondary">{{ $slide->boton }}</a>
            </div>
        </div>
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
    <h2 class="main-heading1 lite">Bienvenidos A Nuestra</h2>
    <h2 class="main-heading2 text-center">Tienda Para El Cuidado De La Salud</h2>
    <br>
    <!-- Heading Ends -->
    <!-- Content Starts -->
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <p>
                Contamos con la m&aacute;s &aacute;mplia variedad de productos con los mas altos estandares de calidad en cuanto a soluciones m&eacute;dicas en Argentina.
            </p>
            <p>
                Solicite un presupuesto de acuerdo a sus necesidades y nos pondremos en contacto a la brevedad, brindando asesoramiento personalizado de acuerdo a su necesidad. 
            </p>
        </div>
    </div>
    <!-- Content Ends -->
    <!-- Intro Boxes Starts -->
    <ul class="list-unstyled row intro-box text-center">
        @foreach ($categorias as $categoria)
        <li class="col-sm-4 col-xs-12">
            <a href="/productos/{{$categoria->id}}"><div class="intro-box-item">
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
<!-- Section Shop Intro Starts -->
<section class="shop-intro-section parallax">
    <!-- Nested Container Starts -->
    <div class="container-fluid">
        <!-- Nested Row Starts -->
        <div class="row">
            <!-- Starts -->
            <div class="col-md-6 col-sm-8 col-xs-10 condensed">
                <div class="shop-intro-section-content-box">
                    <h4>Cuidemonos Entre Todos</h4>
                    <h1>El Mejor Servicio, Sin Moverte De Tu Casa</h1>
                    <p>Brindamos soporte profesional y especializado en cuanto a insumos m&eacute;dicos, cont&aacute;ctenos y estaremos encantados de resolver sus inquietudes.</p>
                    <a href="#" class="btn btn-main">Productos</a>
                </div>
            </div>
            <!-- Ends -->
        </div>
        <!-- Nested Row Ends -->
    </div>
    <!-- Nested Container Ends -->
</section>
<!-- Section Shop Intro Ends -->
<!-- Main Container Starts -->
<div class="container main-container no-margin-top">
    <!-- Book Appointment Box Starts -->
    <div class="book-appointment-box">
        <div class="row">
            <div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
                <h4>Asistencia Telef&oacute;nica</h4>
                <h3><i class="fa fa-phone-square"></i> 011-1245-4567</h3>
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
    </div>
    <!-- Book Appointment Box Ends -->
</div>
<!-- Main Container Ends -->
@endsection