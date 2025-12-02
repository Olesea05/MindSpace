@extends('layouts.app')

@section('title', 'Отзывы')

@section('content')
<div class="container" style="max-width: 900px;">
    <h2 class="mb-4 text-center">Отзывы</h2>

    <!-- Список отзывов -->
    <section>
        <h5 class="mb-3">Последние отзывы</h5>
        @forelse($reviews as $review)
            <div class="mb-3 p-3 border rounded shadow-sm" style="background-color: #f8f9fa;">
                <p><strong>{{ $review->name }}</strong> <span class="text-secondary">({{ $review->created_at->format('d.m.Y') }})</span></p>
                <p>{{ $review->message }}</p>
            </div>
        @empty
            <p>Пока никто не оставил отзыв.</p>
        @endforelse
    </section>

    <!-- Форма добавления нового отзыва -->
    <section class="mt-5 mb-5 p-4 border rounded shadow-sm" style="background-color: #fff0f2;">
        <h5 class="mb-3">Оставьте свой отзыв</h5>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('reviews.submit') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Рейтинг</label>
                <select id="rating" name="rating" class="form-select" required>
                    @for ($i = 5; $i >= 1; $i--)
                        <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('rating')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Отзыв</label>
                <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                @error('message')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>
            <!-- Honeypot поле для ботов -->
            <input type="text" name="website" style="display:none">
            <button type="submit" class="btn btn-dark">Отправить</button>
        </form>
    </section>

    
</div>
@endsection