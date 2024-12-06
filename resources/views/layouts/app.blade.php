<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Conquistador @yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-white py-3 shadow-sm">
            <div class="container d-flex justify-content-between align-items-center">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#menuOptions" aria-controls="menuOptions" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="{{ route('inicio') }}" class="text-uppercase text-dark text-decoration-none">ES</a>
                <a class="navbar-brand text-center fw-bold mx-auto" href="#">
                    <span style="font-size: 1.8rem; font-family: serif;">The Conquistador Hotel</span>
                </a>
                <div class="d-flex align-items-center text-end">
                    <div class="me-3 d-none d-md-block text-center">
                        <span class="d-block text-success" style="font-size: 0.9rem;">Estancia Climática Positiva</span>
                        <small class="text-muted">Respaldada por Regenera</small>
                    </div>
                    <a href="#" class="btn btn-outline-dark rounded-pill px-4">Reservar</a>
                </div>
            </div>
        </nav>
        <div class="collapse" id="menuOptions">
            <!-- Menú a pantalla completa -->
            <div class="fullscreen-menu">
                <!-- Botón de cerrar el menú -->
                <button class="close-menu btn btn-light" type="button">
                    <span>&times;</span> <!-- Este es el símbolo de la 'X' para cerrar -->
                </button>

                <nav class="row text-center justify-content-center">
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Inicio</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Alojamiento</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Restaurante</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Spa</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Yoga</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Oxígeno</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Actividades</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Filosofía</a>
                    <a href="#" class="col-12 text-decoration-none text-dark py-2">Destino</a>
                </nav>
            </div>
        </div>

        <div class="bg-light py-2 responsive d-none d-md-block">
            <div class="container">
                <nav class="row text-center justify-content-center">
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Inicio</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Alojamiento</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Restaurante</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Spa</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Yoga</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Oxígeno</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Actividades</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Filosofía</a>
                    <a href="#" class="col-6 col-md-auto text-decoration-none text-dark py-2">Destino</a>
                    <a href="{{url('./nosotros')}}" class="col-6 col-md-auto text-decoration-none text-dark py-2">Nosotros</a>
                    <a href="{{url('./contacto')}}" class="col-6 col-md-auto text-decoration-none text-dark py-2">Contacto</a>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')
    <footer class="bg-white py-3 shadow-sm">
        <div
            class="container d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
            <!-- Logo de Antigua -->
            <div class="mb-3 mb-md-0">
                <img src="{{ asset('images/logo-antigua.png') }}" alt="Logo Antigua" class="img-fluid"
                    style="max-height: 50px;">
            </div>

            <!-- Separador vertical en pantallas grandes -->
            <div class="d-none d-md-block mx-3" style="border-left: 1px solid #ccc; height: 40px;"></div>

            <!-- Texto del Copyright -->
            <div class="text-muted" style="font-size: 0.9rem; line-height: 1.5;">
                <strong>Copyright © Hotelera del Valle S.A.C.</strong>
                Todos los derechos de propiedad intelectual en todos los logotipos, diseños, texto, imágenes y otros
                materiales en este sitio web son propiedad de Hotelera del Valle S.A.C.
            </div>
        </div>
    </footer>

    <script>
        const closeMenuBtn = document.querySelector('.close-menu');
        const menuOptions = document.querySelector('#menuOptions');

        closeMenuBtn.addEventListener('click', function() {
            const collapseInstance = new bootstrap.Collapse(menuOptions, {
                toggle: false
            });
            collapseInstance.hide();
        });
    </script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
