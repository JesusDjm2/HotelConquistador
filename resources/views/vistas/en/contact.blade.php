@extends('layouts.app')

@section('name','Contact')

@section('content')
<div class="contacto-container">
    <h2>Contact Us</h2>
    <p class="intro-text">We are here to help you. If you have any questions or need more information, do not hesitate to write to us or visit us.</p>

        <div class="contacto-grid">
            <!-- Columna Izquierda: Información de Contacto y Formulario -->
            <div class="contacto-info">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> Av. Principal 123, Ciudad, País</p>
                <p><strong>Phone:</strong> +123 456 789</p>
                <p><strong>Email:</strong> contacto@ejemplo.com</p>
            </div>
            <div class="contacto-mapa">
                <h3>Ubication</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8676717166494!2d-122.40140218468234!3d37.78583491975109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c7f0bb1ad%3A0x7b0a817c53b9baf9!2sOpenAI!5e0!3m2!1ses!2s!4v1692198123456!5m2!1ses!2s"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    <!-- Formulario de contacto -->
        <div class="contacto-info">
            <h2>More information</h2>
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
@endsection