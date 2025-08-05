# Laravel Auth System (Login & Registration)

This is a simple Laravel authentication system with user registration and login functionality, styled using Bootstrap. It was built as a practice project while learning Laravel.

## 🚀 Features

- User Registration
- User Login & Logout
- Form Validation
- Flash Messages for Success & Errors
- Protected Dashboard Route
- Bootstrap 5 Styling

## 🛠️ Tech Stack

- Laravel 10+
- PHP
- MySQL
- Bootstrap 5
- Blade Templating

## 📦 Installation

Follow the steps below to set up the project locally.

1. Clone the repository

```bash
git clone https://github.com/Ratndeep-Shejwal/Login-Registration-in-Laravel.git
cd laravel-auth-system
```

2. Install PHP and JavaScript dependencies
```bash
composer install
npm install && npm run dev
```

3. Set up environment file
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in .env
```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run database Migrations
```bash
php artisan migrate
```

6. Start the development server
```bash
php artisan serve
```
