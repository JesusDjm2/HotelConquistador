@extends('layouts.app')

@section('Nosotros')

@section('content')
<div class="banner-nosotros">
    <img src="{{ asset('img/nosotros/banner.webp') }}" alt="Imagen de quienes somos">
    <div class="banner-content">
        <h1 class="banner-title">Sobre nosotros</h1>
        <p class="banner-subtitle">Un hotel donde te sientes como en tu hogar</p>
    </div>
</div>

<section class="info-nosotros">
    <div class="container">
        <!-- Sección 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2>¿Quiénes somos?</h2>
                <p>
                    Somos una empresa comprometida con el bienestar de nuestros clientes, ofreciendo experiencias únicas
                    e inolvidables. Nuestro objetivo es ser una referencia en la industria con altos estándares de
                    calidad.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/nosotros/hotel_staff.jpg') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <!-- Sección 2 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <h2>Nuestros historia</h2>
                <p>
                    Por mas de 10 años el hotel a estado brindando el mejor servicio a turistas nacionales e
                    internacionales con calidad y calor de hogar.
                </p>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('img/nosotros/hotel_staff.jpg') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <!-- Sección 3 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-1">
                <h2>Nuestros valores</h2>
                <p>
                    Creemos en la responsabilidad social, el respeto por el medio ambiente y el compromiso con la
                    satisfacción de nuestros clientes. Estos valores guían todas nuestras decisiones.
                </p>
            </div>
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('img/nosotros/hotel_staff.jpg') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Tarjeta de Mision Vision y Objetivo -->
<section class="info-cards py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Tarjeta 1 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Misión</h5>
                        <div class="underline"></div>
                        <p class="card-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Visión</h5>
                        <div class="underline"></div>
                        <p class="card-text">
                            It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Objetivo</h5>
                        <div class="underline"></div>
                        <p class="card-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulario de contacto -->
<div class="formulario-nosotros">
    <div class="container">
        <div class="contact-form">
            <h2>Contáctanos</h2>
            <form action="{{ url('/enviar-consulta') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="question">¿Qué deseas saber?</label>
                    <select id="question" name="question" class="form-control">
                        <option value="">Selecciona una opción</option>
                        <option value="horarios">Horarios de atención</option>
                        <option value="precios">Precios de servicios</option>
                        <option value="promociones">Promociones actuales</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar consulta</button>
            </form>
        </div>
    </div>
</div>

@endsection