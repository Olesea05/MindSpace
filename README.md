# MindSpace — Psychologist Portfolio

Watch a quick demo of the site here: https://youtu.be/4zXCBLEIhhQ

MindSpace is a site built with Laravel. It includes a public-facing home, an appointment booking form, and a reviews page where visitors can submit feedback.

## Features

- Reviews: visitors can submit a rating (1–5) and message; reviews are saved to the database and shown on the site.
- Appointments: booking form saved to DB with optional email notification.
- Clean and responsive UI built with Bootstrap.

## Tech Stack

- PHP 8.3
- Laravel 12
- Bootstrap 5
- Vite (Node 20+)
- MySQL

## Installation

```bash
git clone https://github.com/yourusername/mindspace.git
cd mindspace
composer install
cp .env.example .env
php artisan key:generate
# configure database credentials in .env
php artisan migrate
npm install
npm run dev
php artisan serve
```

Author: Olesea05