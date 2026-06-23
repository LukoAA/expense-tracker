# Expense Tracker

A multi-user expense tracker built with Laravel. My second project,
focused on authentication and database relationships.

## Features

- User registration, login, and logout
- Each user sees and manages only their own expenses
- Add, list, and delete expenses with a running total
- Hand-built authentication (no starter kit)

## Built with

- Laravel (PHP)
- SQLite (local) / PostgreSQL (production)
- Blade templates with a shared layout
- Plain CSS

## What I learned

- Authentication: hashing passwords, login/logout, sessions
- Middleware to protect routes from unauthenticated users
- Eloquent relationships (hasMany / belongsTo) to scope data per user
- Ownership checks to stop users modifying each other's data
- Resolving a PATH conflict and PHP version mismatch in Herd on Windows

## Running locally

1. Clone the repo
2. `composer install`
3. Copy `.env.example` to `.env`, run `php artisan key:generate`
4. `php artisan migrate`
5. `php artisan serve` and visit http://127.0.0.1:8000
