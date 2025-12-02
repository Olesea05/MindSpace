@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<!-- Приветственный блок с картинкой -->
<section class="py-5" style="background-color: #fff0f2;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Картинка слева -->
            <div class="col-md-6 mb-4 mb-md-0 text-center">
                <img src="{{ asset('images/Tatiana.png') }}" class="img-fluid" style="max-width: 80%;" alt="Психолог Татьяна">
            </div>
            <!-- Текст справа -->
            <div class="col-md-6">
                <h1 class="display-4">Татьяна Гынку</h1>
                <p class="lead">Приветствую вас на моём сайте! Я готова быть рядом с Вами в непростой период жизни. Моя цель: помочь людям находить гармонию, понимать себя и строить счастливую жизнь.</p>
                <a href="{{ route('appointment.form') }}" class="btn btn-dark btn-lg mt-3">Записаться на консультацию</a>
            </div>
        </div>
    </div>
</section>

<!-- Блок преимуществ работы с психологом -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-5">Мои достижения</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h3 class="display-5" style="color: #f6a5b8;">15</h3>
                    <p>лет опыта</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h3 class="display-5" style="color: #f6a5b8;">9600+</h3>
                    <p>часов практики</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h3 class="display-5" style="color: #f6a5b8;">600+</h3>
                    <p>довольных клиентов</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Блок о подходе и ценностях -->
<section class="py-5" style="background-color: #fff0f2;">
    <div class="container">
        <h2 class="text-center mb-4">Мой подход</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Индивидуальные консультации</h5>
                        <p class="card-text">Работа с личными проблемами, стрессом, тревогой и поиском внутренней гармонии.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Семейные консультации</h5>
                        <p class="card-text">Помощь в улучшении отношений, коммуникации и взаимопонимания в семье и парах.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Онлайн-консультации</h5>
                        <p class="card-text">Удобные и безопасные сессии через Zoom или другие платформы для любого города и страны.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Призыв к действию -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Готовы начать путь к гармонии?</h2>
        <p class="mb-4">Запишитесь на консультацию и сделайте первый шаг к себе.</p>
        <a href="{{ route('appointment.form') }}" class="btn btn-dark btn-lg mt-3">Записаться на консультацию</a>
    </div>
</section>
@endsection