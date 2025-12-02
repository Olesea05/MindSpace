<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // Отображение страницы с отзывами
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();

        return view('reviews', compact('reviews'));
    }

    // Обработка отправки формы
    public function submit(Request $request)
    {
        // honeypot: если заполнено скрытое поле — бот
        if ($request->filled('website')) {
            return back()->with('success', 'Спасибо!');
        }

        // валидация формы
        $validated = $request->validate([
            'name' => 'nullable|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:50',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string|max:2000',
        ]);

        // сохраним отзыв
        Review::create([
            'name'   => $validated['name'],
            'email'  => $validated['email'],
            'phone'  => $validated['phone'] ?? null,
            'rating' => $validated['rating'],
            'message'=> $validated['message'],
            'status' => 'approved',      // авто-одобрение
            'ip'     => $request->ip(),
        ]);

        return redirect()->back()->with('success', 'Спасибо за отзыв!');
    }
}