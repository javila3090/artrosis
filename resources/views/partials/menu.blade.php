<div class="cryptos-main-menu box-shadow">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cryptosNav">

                <!-- Logo -->
                <a href="/"><img src="{{asset('img/logo.png')}}" class="nav-brand float-left img-fluid" width="170"></a>


                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul class="smooth-scroll ">
                            <li><a href="{{route('home')}}">Inicio</a></li>
                            <!--<li><a href="{{route('quote')}}">Cotizar</a></li>-->
                            <li><a href="#">Nosotros</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('aboutUs')}}">¿Quiénes somos?</a></li>
                                    <li><a href="{{route('requirements')}}">Requisitos y otros</a></li>
                                    <li><a href="{{route('fonasa_isapre')}}">Fonasa e Isapres</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('agreement')}}">Solicitar convenio</a></li>
                            <li><a href="{{route('learn')}}">Aprende</a></li>
                            <li><a href="{{route('videos')}}">Videos</a></li>
                            <li><a href="{{route('contact')}}">Contacto</a></li>
                            @if(\Auth::user())
                            <li><a href="{{url('/admin')}}">Admin</a></li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <a href="#" class="size-16px" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" title="Salir"></i>
                                </a>

                            </li>
                            @endif
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
