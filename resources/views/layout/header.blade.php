<header>
    <!-- Header Start -->
   <div class="header-area header_area header-transparent">
        <div class="main-header">
           <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-1 col-md-1">
                            <div class="logo">
                              <a href="{{ route('index') }}"><img src="{{asset('assets/img/logo/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="{{ route('index') }}">Inicio</a></li>
                                        <li><a href="{{ route('about') }}">Acerca</a></li>
                                        <li><a href="{{ route('products') }}">Productos</a></li>
                                        {{-- <li><a href="work.html">Casos de éxito</a></li> --}}
                                        {{-- <li><a href="blog.html">Blog</a></li> --}}
                                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                                        <li><a href="https://facebook.com/bitsis.gt" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/bitsisgt" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://linkedin.com/company/bitsisgt"target="_blank"><i class="fab fa-linkedin" target="_blank"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCEJNU4-6y_bMT2bNN75LwBA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="{{ route('contact') }}" class="btn header-btn">Contáctanos</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>