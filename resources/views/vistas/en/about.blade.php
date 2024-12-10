@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="banner-nosotros">
    <img src="{{ asset('img/nosotros/banner.webp') }}" alt="Imagen de quienes somos">
    <div class="banner-content">
        <h1 class="banner-title">About Us</h1>
        <p class="banner-subtitle">A hotel where you feel at home</p>
    </div>
</div>

<section class="info-nosotros">
    <div class="container">
        <!-- Sección 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2>Who are we?</h2>
                <p>
                    We are a company committed to the well-being of our clients, offering unique experiences
                    and unforgettable. Our goal is to be a reference in the industry with high standards of
                    quality.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/nosotros/hotel_staff.jpg') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <!-- Sección 2 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <h2>Our history</h2>
                <p>
                    For more than 10 years the hotel has been providing the best service to national and international tourists.
                    international with quality and home warmth.
                </p>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('img/nosotros/hotel_staff.jpg') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <!-- Sección 3 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-1">
                <h2>Our values</h2>
                <p>
                    We believe in social responsibility, respect for the environment and commitment to
                    satisfaction of our clients. These values ​​guide all our decisions.
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
            <h2>Contact Us</h2>
            <form action="{{ url('/enviar-consulta') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="question">¿What do you need?</label>
                    <select id="question" name="question" class="form-control">
                        <option value="">Choose an option</option>
                        <option value="horarios">Atention hours</option>
                        <option value="precios">Services' prices</option>
                        <option value="promociones">Currently promotions</option>
                        <option value="otro">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection