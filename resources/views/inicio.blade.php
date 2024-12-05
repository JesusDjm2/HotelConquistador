@extends('layouts.appes')
@section('title', '- Home')
@section('content')
    <div class="slider-container position-relative">
        <div class="slider-slide active" style="background-image: url('{{asset('img/slide/fondo-01.jpg')}}');">
            <div class="slider-content">
                <h2>Bienvenido al Hotel Conquistador</h2>
                <p>Disfruta de la mejor experiencia de lujo y confort.</p>
            </div>
        </div>
        <div class="slider-slide" style="background-image: url('{{asset('img/slide/fondo-02.jpg')}}');">
            <div class="slider-content">
                <h2>Un Oasis de Paz</h2>
                <p>Relájate en el corazón de la naturaleza.</p>
            </div>
        </div>
        <div class="slider-slide" style="background-image: url('{{asset('img/slide/fondo-03.jpg')}}');">
            <div class="slider-content">
                <h2>Tu Destino de Ensueño</h2>
                <p>Planea tu próxima aventura con nosotros.</p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slider-slide');
            let currentIndex = 0;

            function showNextSlide() {
                slides[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].classList.add('active');
            }

            setInterval(showNextSlide, 5000); // Cambia de imagen cada 5 segundos
        });
    </script>

@endsection
