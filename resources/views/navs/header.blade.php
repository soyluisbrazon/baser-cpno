<!--=================================
        MAIN MENU START
    ==================================-->
    <nav class="navbar navbar-expand-lg main_menu bg-white">
        <div class="container m-0 p-0">
            <a class="navbar-brand" href="#">
                {{-- <img src="{{ asset('assets/images/logo.png') }}" alt="Eduor" class="img-fluid w-50" --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="about_us.html">Productos</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorias<i class="far fa-angle-down"></i></a>
                        <ul class="tf__droap_menu">
                            <li><a class="active" href="index.html">home 1</a></li>
                            <li><a href="index_2.html">home 2</a></li>
                            <li><a href="index_3.html">home 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paginas de interes <i class="far fa-angle-down"></i></a>
                        <ul class="tf__droap_menu">
                            
                            <li><a href="faq.html">Preguntas frecuentes</a></li>
                            <li><a href="sign_in.html">Iniciar sesion</a></li>
                            <li><a href="sign_up.html">Registro</a></li>
                            <li><a href="contact.html">Contacto</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Carrito</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link common_btn" href="#">Buscar productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=================================
        MAIN MENU END
    ==================================-->