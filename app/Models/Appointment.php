<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Разрешаем массовое заполнение этих полей
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
