<!-- Header Starts -->
<header class="main-header">
    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Top Bar Starts -->
        <div class="top-bar hidden-sm hidden-xs">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <span>Horario:</span>  Lun a Vier - 9:00 - 20:00, Sab - 9:00 - 13:00
                </div>
                <div class="col-sm-7 col-xs-12">
                    <ul class="list-unstyled list-inline">
                        <li class="hidden-md"><p href="mailto:administracion@lyrasalud.com">
                            <i class="fa fa-envelope-o"></i>
                            administracion@lyrasalud.com
                        </p>
                        </li>
                        <li><i class="fa fa-phone"></i> Llamanos: 0221 228 8958</li>
                        <li><i class="fa fa-phone"><a href="https://api.whatsapp.com/send?phone=542214973663"></i> Whatsapp: 0221 497 3663</li></a>
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
                            <a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a>
                        </li>
                        <li class="dropdown">
                            <a href="/productos/1" class="dropdown-toggle">
                            Nuestros Productos
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                
                                <!--<li><a href="/productos/ -- $categoria->id --">-- $categoria->titulo --</a></li> -->
                                
                                <li>
                                    <a href="images\odontologia.pdf" download>
                                    Descargar Listado Odontologia 
                                    </a> 
                                </li>
                                <li>
                                    <a href="images\insumos.pdf" download>
                                    Descargar Listado Insumos Médicos 
                                    </a> 
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/novedades">Capacitación</a>
                        </li>
                        <li class="dropdown">
                            <a href="/servicios">Asesoramiento</a>
                        </li>
                        <li class="dropdown">
                            <a href="/contacto">Contacto</a>
                        </li>

                        <li class="dropdown" id="listado1">
                            <a href="images\odontologia.pdf">Descargar Listado Odontologia  </a>
                        </li>
                        <li class="dropdown" id="listado2">
                            <a href="images\insumos.pdf">Descargar Listado Insumos Médicos </a>
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