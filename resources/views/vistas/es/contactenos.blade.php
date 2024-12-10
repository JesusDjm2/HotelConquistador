@extends('layouts.app')

@section('name','Contactenos')

@section('content')
<div class="contacto-container">
    <h2>Contáctanos</h2>
    <p class="intro-text">Estamos aquí para ayudarte. Si tienes alguna consulta o necesitas más información, no dudes en
        escribirnos o visitarnos.</p>

        <div class="contacto-grid">
            <!-- Columna Izquierda: Información de Contacto y Formulario -->
            <div class="contacto-info">
                <h3>Información de Contacto</h3>
                <p><strong>Dirección:</strong> Av. Principal 123, Ciudad, País</p>
                <p><strong>Teléfono:</strong> +123 456 789</p>
                <p><strong>Email:</strong> contacto@ejemplo.com</p>
            </div>
            <div class="contacto-mapa">
                <h3>Ubicación</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8676717166494!2d-122.40140218468234!3d37.78583491975109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c7f0bb1ad%3A0x7b0a817c53b9baf9!2sOpenAI!5e0!3m2!1ses!2s!4v1692198123456!5m2!1ses!2s"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    <!-- Formulario de contacto -->
        <div class="contacto-info">
            <h2>Para mas informacion</h2>
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
@endsection