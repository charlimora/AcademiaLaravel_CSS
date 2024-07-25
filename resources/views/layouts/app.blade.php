<html>
    <head>
        <title>Andres Academy - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <header>
            <nav id="nav" class="nav1">
                <div class="contenedor-nav">
                    <div class="logo">
                        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo de la empresa">
                    </div>
                    <div class="enlaces" id="enlaces">
                        <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                        <a href="#" id="enlace-equipo" class="btn-header">Cursos</a>
                        <a href="#" id="enlace-servicio" class="btn-header">Inscripciones</a>
                        <a href="#" id="enlace-trabajo" class="btn-header">Testimonios</a>
                        <a href="#" id="enlace-contacto" class="btn-header">Sobre nosotros</a>
                    </div>
                    <div class="icono" id="open">
                        <span>&#9776;</span>
                    </div>
                </div>
            </nav>
            <div class="textos">
                <h1>Carlos Mora</h1>
                <h2>Instructor SENA</h2>
            </div>
        </header>

            <div class="container">
            @yield('contenido')
            </div>

            {{--a continuación footer del proyecto en CSS--}}
        <footer id="contacto">
            <div class="footer contenedor">
                <div class="marca-logo">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo de la empresa">
                </div>
                <div class="iconos">
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-github"></i>
                </div>
                <p>@yield('textofooter')</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
