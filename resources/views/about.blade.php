@extends('layouts.app')

@section('title', 'Обо мне')

@section('content')

<!-- Биография -->
<section class="py-4">
    <div class="container" style="max-width: 800px;">
        <h2 class="mb-3" style="font-size: 1.9rem; font-weight:600; text-align:left;">
            Коротко обо мне
        </h2>

        <p style="font-size:1.1rem; line-height:1.6;">
            Я окончила <strong>Университет Иона Крянгэ</strong> по специальности «Психология». 
            Много лет работала школьным психологом и проводила частные консультации, помогая детям, подросткам и взрослым справляться с тревогой, стрессом, эмоциональной перегрузкой и кризисными ситуациями.
        </p>

        <p style="font-size:1.1rem; line-height:1.6;">
            Также имею опыт работы с детьми с <strong>особыми образовательными потребностями</strong>: 
            РАС (аутизм), синдром Дауна, задержки развития, трудности обучения и сложности адаптации.
        </p>
    </div>
</section>

<!-- Направления работы -->
<section class="py-4" style="background-color: #fff0f2;">
    <div class="container" style="max-width: 800px;">
        <h2 class="mb-3" style="font-size: 1.9rem; font-weight:600; text-align:left;">
            С чем я помогаю
        </h2>

        <ul style="font-size:1.1rem; line-height:1.7; padding-left: 20px;">
            <li>тревожность и стресс;</li>
            <li>эмоциональное выгорание;</li>
            <li>неуверенность и низкая самооценка;</li>
            <li>сложности в отношениях и семье;</li>
            <li>подростковые переживания и адаптация;</li>
            <li>нарушения поведения и трудности обучения у детей.</li>
        </ul>
    </div>
</section>

<!-- Завершение -->
<section class="py-5">
    <div class="container" style="max-width: 800px; text-align:left;">
        <h2 class="mb-3" style="font-size: 1.9rem; font-weight:600;">
            Моя цель
        </h2>

        <p style="font-size:1.1rem; line-height:1.6;">
            Я стремлюсь помочь человеку почувствовать внутреннюю опору, уверенность и ресурс. 
            Иногда для того, чтобы сделать шаг вперёд, достаточно, чтобы рядом был кто-то, кто слышит и понимает.
        </p>

        <a href="{{ route('appointment.form') }}" class="btn btn-dark btn-lg mt-3">Записаться на консультацию</a>
    </div>
</section>

@endsection