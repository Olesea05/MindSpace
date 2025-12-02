<!DOCTYPE html> 
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Навбар -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">MindSpace</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Обо мне</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reviews.index') }}">Отзывы</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Контент -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- --- ФУТЕР --- -->
    <footer class="footer mt-5 text-light">
        <div class="container py-5">

            <div class="row">

                <!-- Колонка 1 -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Татьяна Гынку</h5>
                    <p class="text-secondary">
                        Психолог-консультант. 
                        <p class="mb-1 text-secondary">Email:</p>
                        <a href="mailto:moiarabo4aia@gmail.com" class="text-light d-block mb-2">moiarabo4aia@gmail.com</a>
                    </p>
                </div>

                <!-- Колонка 2 -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Контакты</h5>
                    <p class="mb-1 text-secondary">Телефон:</p>
                        <span class="text-light d-block mb-2">+373 79 261 658</span>

                    <p class="mb-1 text-secondary">Instagram:</p>
                    <a href="https://instagram.com/tatyana_gincu" target="_blank" class="text-light">@tatyana_gincu</a>
                </div>

                <!-- Колонка 3 -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Полезные ссылки</h5>

                    <p class="mb-1 text-secondary">Узнать больше:</p>

                    <ul class="list-unstyled">
                        <li><a href="{{ route('privacy') }}" class="text-light">Политика конфиденциальности</a></li>
                        <li><a href="{{ route('appointment.form') }}" class="text-light">Записаться на консультацию</a></li>
                    </ul>
                </div>

            </div>

            <hr class="border-secondary">

            <p class="text-center text-secondary mt-3 mb-0">
                © 2025 MindSpace. Сайт-портфолио. Все права защищены.
            </p>

        </div>
    </footer>

    <style>
        .footer {
            background-color: #111;
            border-top: 1px solid #333;
        }

        .footer a {
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>