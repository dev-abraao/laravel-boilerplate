# Laravel Starter Boilerplate

A lightweight Laravel starter kit designed to help you kick-start new projects with essential functionality already set up.

---

## ✨ Features

- **Functional Authentication Controller**  
  - Preconfigured authentication logic for handling login, registration, and logout.

- **Custom Middlewares**  
  - Extended versions of Laravel’s default `guest` and `auth` middlewares.  
  - Easily change redirect routes on demand via `bootstrap/app.php`.

- **Form Requests for Validation**  
  - `LoginRequest` and `RegisterRequest` included for clean and reusable input validation.

- **Blade Layout with Tailwind CSS**  
  - Base layout already styled with Tailwind, so you can focus on building your app.

- **Authentication & Dashboard Routes**  
  - Predefined routes for login, register, and dashboard pages.

- **Prebuilt `users` Table Migration**  
  - Includes `name`, `email`, `password`, and timestamp columns out of the box.

---

## 🚀 Getting Started

1. **Clone the repository**

   ```bash
   git clone https://github.com/your-username/laravel-starter-boilerplate.git
   cd laravel-starter-boilerplate
   ```
   
2. **Install dependencies**

   ```bash
    composer install
    npm install && npm run dev
   ```
   
3. **Set Up Environment**
   
   ```bash
    cp .env.example .env
    php artisan key:generate
   ```
   
4. **Run Migrations**
   
   ```bash
    php artisan migrate
   ```
   
5. **Initialize the server**
   
   ```bash
    php artisan serve
   ```
