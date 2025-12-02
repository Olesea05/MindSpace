<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    // Показ формы
    public function showForm()
    {
        return view('appointment.form');
    }

    // Обработка формы
    public function submit(Request $request)
    {
        // Валидация данных
        $data = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'nullable|max:2000'
        ]);

        // Сохраняем в базу
        $appointment = Appointment::create($data);

        // Отправка email тебе
        Mail::raw(
            "Новая заявка на консультацию\n\nИмя: {$appointment->name}\nEmail: {$appointment->email}\nТелефон: {$appointment->phone}\nСообщение: {$appointment->message}",
            function ($mail) {
                $mail->to('ghincuolesea@gmail.com')->subject('Новая запись на консультацию');
            }
        );

        // Редирект с сообщением
        return redirect()->back()->with('success', 'Спасибо! Я свяжусь с вами в ближайшее время.');
    }
}