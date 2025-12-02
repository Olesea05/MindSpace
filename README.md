# MindSpace — Psychologist Portfolio Website

A simple portfolio website for psychologist **Tatiana Ghincu** built with Laravel, Blade and Bootstrap. This project is intended as a portfolio and a learning example showcasing Laravel features like forms, validation, migrations, and simple email notifications.

---

## Contents

- Features
- Tech stack
- Quick start (development)
- Production build & deployment
- Project structure
- Reviews & Appointments overview
- Troubleshooting & common issues
- Contributing
- License

---

## Features

- Home and About pages.
- Appointment booking form (saves to DB and sends notification email).
- Reviews page allowing visitors to submit reviews that are displayed immediately.
- Simple spam protection via a honeypot and throttling.
- Responsive UI built with Bootstrap 5 and Blade templates.

---

## Tech stack

- PHP 8.3.x
- Laravel 12
- Blade templating
- Bootstrap 5
- Vite + laravel-vite-plugin for front-end asset bundling
- MySQL (default)
- Node 20+ for Vite

---

## Prerequisites

- PHP 8.3+
- Composer
- Node 20+ and npm/yarn
- MySQL 5.7+/8.0+

---

## Quick Start (local development)

1. Clone repository and install PHP dependencies:

```bash
git clone https://github.com/yourusername/mindspace.git
cd mindspace
composer install
```

2. Copy `.env.example` and set an application key and DB credentials:

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` and set DB variables (for MySQL):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mindspace
DB_USERNAME=root
DB_PASSWORD=
```

> Optional: using SQLite locally — set `DB_CONNECTION=sqlite` and `DB_DATABASE=/absolute/path/to/database.sqlite` then create the file with `touch database/database.sqlite`.

3. Install node deps and run the Vite dev server:

```bash
npm install
npm run dev
```

> Note: Vite requires Node >= 20. If you see errors referencing `crypto.hash is not a function`, upgrade Node.

4. Run migrations and start the Laravel dev server:

```bash
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000.

---

## Production build & deployment

Build assets and optimize Laravel for production:

```bash
npm ci
npm run build
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Make sure your web server serves `public/` and the built assets are available (e.g. `public/build`).

---

## Project structure & key files

- `routes/web.php` — web routes
- `app/Http/Controllers/AppointmentController.php` — appointment logic
- `app/Http/Controllers/ReviewController.php` — review logic
- `app/Models/Appointment.php`, `app/Models/Review.php` — models
- `resources/views/layouts/app.blade.php` — main Laravel layout
- `resources/views/*.blade.php` — site pages (home, about, reviews, appointment)
- `resources/css/*` — CSS assets (Tailwind + custom)
- `database/migrations/` — DB migrations for reviews and appointments

---

## Reviews behavior

- Visit `/reviews` to view reviews and submit a new one.
- Required fields: `email`, `message`, `rating` (1–5). `name` and `phone` are optional.
- Reviews are saved in DB and sorted by `created_at desc`.
- Spam protection: a hidden `website` field (honeypot) and submission throttling (3 per minute).

---

## Common issues / Troubleshooting

- Vite / Node errors: Ensure `node -v` is >= 20. If not, upgrade Node (nvm recommended).
- `manifest.json not found`: Run `npm run build` before deploying; or run `npm run dev` for development and HMR.
- DB connection errors (SQLSTATE 2002, access denied): Check `.env` DB_* credentials and ensure DB server is reachable.
- Server returns 500: Check `storage/logs/laravel.log` for full error details.

Useful commands:

```bash
php artisan view:clear
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan migrate:status
```

---

## Testing

Run tests with Laravel's test runner:

```bash
php artisan test
```

---

## Contributing

- Fork the repository and open a pull request. Keep PRs focused and include a description.
- Add tests where possible.

---

## Attribution & License

This project is a portfolio piece created by Tatiana (repo owner). Verified under the MIT License (see `LICENSE`).

---

Thanks for checking out MindSpace! If you want any additional sections (screenshots, quick demo, advanced deploy instructions) — tell me what you'd like and I’ll add it.