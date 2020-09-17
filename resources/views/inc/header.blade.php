<!-- Header Starts -->
<header class="main-header">
    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Top Bar Starts -->
        <div class="top-bar hidden-sm hidden-xs">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <span>Horario:</span>  Lun a Vier - 9:00 - 20:00, Sab &amp; Dom - 10:00 - 15:00
                </div>
                <div class="col-sm-7 col-xs-12">
                    <ul class="list-unstyled list-inline">
                        <li class="hidden-md"><a href="mailto:care@yourhosptialsname.com">
                            <i class="fa fa-envelope-o"></i>
                            fabiana@lyrasalud.com
                            </a>
                        </li>
                        <li><i class="fa fa-phone"></i> Llamanos: 011-1245-4567</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Top Bar Ends -->
        <!-- Navbar Starts -->
        <nav id="nav" class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Navbar Header Starts -->
                <div class="navbar-header">
                    <!-- Collapse Button Starts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- Collapse Button Ends -->
                    <!-- Logo Starts -->
                    <a href="{{ url('/') }}" class="navbar-brand" id="logo-contenedor">
                    <img src="/images/logo2.jpg" id="logo">
                    Lyra Salud
                    </a>
                    <!-- Logo Ends -->
                </div>
                <!-- Navbar Header Ends -->
                <!-- Navbar Collapse Starts -->
                <div class="navbar-collapse collapse navbar-right">
                    <!-- Navbar Links Starts -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="{{ url('/sobre-nosotros') }}">
                            Sobre Nosotros
                            </a>
                        </li>
                        <li class="dropdown">
                        <li class="dropdown">
                            <a href="/servicios">Servicios</a>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a href="/productos" class="dropdown-toggle">
                            Productos
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach ($categorias as $categoria)
                                <li><a href="/productos/{{ $categoria->id }}">{{ $categoria->titulo }}</a></li>
                    			@endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/novedades">Novedades</a>
                        </li>
                        <li class="dropdown">
                            <a href="/contacto">Contacto</a>
                        </li>
                        <!--<li class="dropdown">
                            <a href="">Solicite presupuesto</a>
                        </li> -->
                    </ul>
                    <!-- Navbar Links Ends -->						
                </div>
                <!-- Navbar Collapse Ends -->
            </div>
        </nav>
        <!-- Navbar Ends -->
    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Ends -->