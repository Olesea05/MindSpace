# MindSpace — Psychologist Portfolio Website

This website was created to showcase skills in **Laravel**, **Blade**, **Bootstrap**, **MySQL**, and basic email sending. It is an educational project and portfolio piece.

---

## Project Overview

MindSpace is a portfolio website for psychologist Tatiana Ghincu, featuring:

- **Home Page** with brief information about the psychologist and the ability to book a consultation.
- **About Page** with biography and areas of expertise.
- **Footer** with contact information, social media links, and useful pages.
- **Consultation Form** saving submissions to a MySQL database and sending notification emails.
- **Reviews Page** allowing users to submit a review, which is immediately displayed on the website and stored in the database.

---

## Technologies Used

- **Backend:** PHP 8.3, Laravel 12
- **Frontend:** Blade, Bootstrap 5
- **Database:** MySQL
- **Email:** Laravel Mail for notifications
- **Extras:** Spam protection using a honeypot and submission throttling

---

## Installation

1. Clone the repository:  
```bash
git clone https://github.com/yourusername/mindspace.git
cd mindspace

2. Install dependencies with Composer:
```bash
composer install

3.Copy .env.example to .env and configure your MySQL connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mindspace
DB_USERNAME=root
DB_PASSWORD=

4. Create the database and run migrations:
```bash
php artisan migrate

5. Start the local server:
```bash
php artisan serve

---

## Project Structure

routes/web.php — website routes
app/Http/Controllers/AppointmentController.php — consultation controller
app/Http/Controllers/ReviewController.php — reviews controller
resources/views/ — Blade templates (home.blade.php, about.blade.php, reviews.blade.php, appointment.blade.php)
database/migrations/ — migrations for appointments and reviews tables
app/Models/ — models Appointment and Review

---

## Usage
Booking a Consultation

The form is available on the home page and in the footer.
Submissions are saved to the MySQL database and a notification email is sent (configurable in .env).

Reviews

Users can submit a review by providing an email and a message (name and phone are optional).
Reviews are stored in the database and immediately displayed on the /reviews page.
Spam protection is implemented via a hidden honeypot field and submission throttling (max 3 per minute).