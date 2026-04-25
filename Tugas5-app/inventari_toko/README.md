# Inventory Management System

A modern, minimalistic, and clean Inventory Management System built with Laravel 12, Bootstrap 5, and Laravel Breeze.

## 🚀 Features

- **Authentication**: Secure Login & Registration using Laravel Breeze.
- **Dashboard**: Overview of total products, total stock, and recent additions.
- **Product Management (CRUD)**:
  - View all products in a clean data table.
  - Add new products with validation (Name, Price, Stock, Description).
  - Edit existing products.
  - Delete products with a secure modal confirmation.
- **Modern UI**: Custom Admin layout using Bootstrap 5, featuring a sidebar, top navbar, and glassmorphism-inspired UI elements.

## 🛠️ Tech Stack

- PHP 8.2+
- Laravel 12
- SQLite (Default) / MySQL
- Bootstrap 5 (UI Framework)
- Laravel Breeze (Auth Scaffolding)

---

## ⚙️ Installation & Setup (Local Environment)

Follow these steps to run the project on your local machine (using XAMPP, Laragon, or Laravel Herd).

### 1. Clone or Extract the Project
Make sure you are in the project root directory (`inventari_toko`).

### 2. Install Dependencies
Run the following commands to install PHP and Node.js dependencies:
```bash
composer install
npm install
npm run build
```

### 3. Environment Configuration
Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```
Generate the application key:
```bash
php artisan key:generate
```

### 4. Database Setup
By default, this project uses **SQLite**. The database file is located at `database/database.sqlite`.

**If you prefer to use MySQL (XAMPP/Laragon):**
1. Open your `.env` file.
2. Change the DB connection settings to:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventari_toko
DB_USERNAME=root
DB_PASSWORD=
```
3. Create a database named `inventari_toko` in your MySQL server (via phpMyAdmin or HeidiSQL).

### 5. Migrate & Seed the Database
Run the migrations and populate the database with dummy data (including a test Admin user and 20 products):
```bash
php artisan migrate:fresh --seed
```

### 6. Run the Application
Start the Laravel development server:
```bash
php artisan serve
```
Open your browser and navigate to: `http://localhost:8000`

---

## 🔐 Default Login Credentials
After running the seeder, you can log in using the following credentials:
- **Email:** `admin@example.com`
- **Password:** `password`

## 🎨 Screenshots
*(You can capture screenshots of the Dashboard and Product Data Table and place them in this section).*

---
Built with ❤️ using Laravel 12.
