@extends('layouts.app')

@section('title', 'Запись на консультацию')

@section('content')
<section class="py-5">
    <div class="container" style="max-width: 600px;">

        <h2 class="mb-4">Записаться на консультацию</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('appointment.submit') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Имя *</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email *</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Телефон (не обязательно)</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Сообщение (не обязательно)</label>
                <textarea name="message" class="form-control" rows="4"></textarea>
            </div>

            <button class="btn btn-dark btn-lg w-100">Отправить</button>
        </form>

    </div>
</section>
@endsection