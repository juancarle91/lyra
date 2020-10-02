<!-- Footer Starts -->
<footer class="main-footer">
    <!-- Footer Area Starts -->
    <div class="footer-area">
        <!-- Nested Container Starts -->
        <div class="container">
            <div class="row">
                <!-- Hosptial Information Starts -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <h4>Informaci&oacute;n</h4>
                    <p>
                        Nuestras oficinas están siempre abiertas para brindar la mejor atención especializada al público.
                    </p>
                    <ul class="list-unstyled address-list">
                        <li class="clearfix address">
                            <i class="fa fa-home"></i>
                            Av. 60 1124 Depto. 8a, La Plata, Buenos Aires, Argentina.
                        </li>
                        <li class="clearfix">
                            <i class="fa fa-fax"></i>
                            Teléfono: 221-228-8958
                        </li>
                        <li class="clearfix">
                            <a href="https://api.whatsapp.com/send?phone=542214973663&text=Gracias!%20por%20contactarte,%20estaremos%20respondiendo%20en%20breve."><i class="fa fa-phone"></i>
                            Whatsapp: 221-497-3663</a>
                        </li>
                        <li class="clearfix">
                            <i class="fa fa-envelope"></i>
                            <p href="mailto:administracion@lyrasalud.com">administracion@lyrasalud.com</p>
                        </li>
                    </ul>
                </div>
                <!-- Hosptial Information Ends -->
                <!-- Services Starts -->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <h4>Productos</h4>
                    <ul class="list-unstyled">
                        @foreach ($categorias as $categoria)
                        <li><a href=""/productos/{{ $categoria->id }}""><i class="fa fa-angle-right"></i>{{ $categoria->titulo }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Services Ends -->
                <!-- Twitter Starts -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <h4>Redes</h4>
                    <ul class="list-unstyled tweets-list">
                        <li>
                            <a href="https://www.facebook.com/lyra.salud.10"><i class="fa fa-facebook"></i>
                            Facebook.</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/lyrasalud/?hl=es-la"><i class="fa fa-instagram"></i>
                            Instagram.</a>
                        </li>
                    </ul>
                </div>
                <!-- Twitter Ends -->

                <!-- Signup Newsletter Starts -->
                <!--<div class="col-md-4 col-xs-12 newsletter-block">
                    <h4>Nuestro Newsletter</h4>
                    <form action="/" class="newsletter" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Su Nombre Completo">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Su Direcci&oacute;n de Email">
                        </div>
                        <button type="submit" class="btn btn-lg btn-block btn-secondary">Enviar</button>
                    </form>
                </div>
                <!-- Signup Newsletter Ends -->
                
            </div>
        </div>
        <!-- Nested Container Ends -->
    </div>
    <!-- Footer Area Ends -->
    <!-- Copyright Starts -->
    <div class="copyright">
        <div class="container clearfix">
            <p class="pull-left">
                &copy; Copyright 20. Todos Los Derechos Reservados Por <a href="/"><span>Lyra Salud SRL</span></a>
            </p>
            <ul class="list-unstyled list-inline pull-right">
                <!-- <li><a href="#">Terminos De Servicio</a></li>-->
                <!-- <li><a href="#">Privacidad</a></li>-->
                <li><a href="/contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
    <!-- Copyright Ends -->
</footer>
<!-- Footer Ends -->