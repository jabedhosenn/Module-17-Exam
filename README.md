# 🧾 Laravel

## 📌 Overview

This project is a **Point of Sale (POS) System** built with the **Laravel Framework**.  
It includes two major parts:

1. **Template to Blade Conversion**  
2. **Database Design to Migration**

---

## 🧩 Task 1: Template to Blade Conversion

### 🎯 Objective

Convert the provided **Bootstrap HTML Template** into Laravel’s **Blade structure** with modular, reusable, and scalable components.

### 🧱 Key Deliverables
- Master layout (`layouts/app.blade.php`)
- Header, Footer, and Sidebar partials
- Page-specific Blade files (e.g., `home.blade.php`, `resume.blade.php`)
- Proper asset linking using `{{ asset() }}` helper

---

## 🧱 Task 2: Database Design to Migration

### 🎯 Objective

Design and implement Laravel **migration files** based on the provided database diagram.

### 🗄️ Database Schema

| Table Name         | Description                            |
|--------------------|----------------------------------------|
| `users`            | Stores user login and profile details  |
| `categories`       | Product categories                     |
| `products`         | Product information                    |
| `customers`        | Customer details                       |
| `invoices`         | Invoice master data                    |
| `invoice_products` | Products included in each invoice      |

---

## ⚙️ Setup Instructions

```bash
# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start the development server
php artisan serve
```

---

## 📺 Video

🎥 **Watch Video:** [Google Drive Link](https://drive.google.com/file/d/1zig7-0a0KtO7qA3PnzlWP5lViYerxHaG/view?usp=sharing)

---

## 👨‍💻 Developer Info

**Author:** Jabed Hosen  
**Email:** [jabedhosenn@gmail.com](mailto:jabedhosenn@gmail.com)  
**GitHub:** [github.com/jabedhosenn](https://github.com/jabedhosenn)  
**LinkedIn:** [linkedin.com/in/jabedhosen](https://linkedin.com/in/jabedhosen)
