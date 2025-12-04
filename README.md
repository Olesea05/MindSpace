# MindSpace — Psychologist Portfolio

Watch a quick demo of the site here: https://youtu.be/4zXCBLEIhhQ

MindSpace is a small portfolio site built with Laravel. It includes a public-facing home, an appointment booking form, and a reviews page where visitors can submit feedback.

Quick highlights:

- Reviews: visitors can submit a rating (1–5) and message; reviews are saved to the database and shown on the site.
- Appointments: booking form saved to DB with optional email notification.
- Stack: PHP 8.3, Laravel 12, Bootstrap 5, Vite (Node 20+), MySQL by default.

Quick start (dev):

```bash
git clone https://github.com/yourusername/mindspace.git
cd mindspace
composer install
cp .env.example .env
php artisan key:generate
# configure DB in .env (MySQL recommended)
php artisan migrate
npm install
npm run dev
php artisan serve
```

Open http://127.0.0.1:8000

If you need to switch to SQLite for quick local testing, set `DB_CONNECTION=sqlite` and point `DB_DATABASE` to a `database/database.sqlite` file (create it with `touch database/database.sqlite`).

Troubleshooting tips:

- If Vite errors appear, ensure `node -v` is >= 20.
- For DB errors, verify `.env` DB_ values and that the DB server is reachable.
- Check `storage/logs/laravel.log` for server-side errors.

Testing:

```bash
php artisan test
```

License & Author

This project is MIT licensed.

Author: Olesea05