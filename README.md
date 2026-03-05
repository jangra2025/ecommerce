E-Commerce Website (Laravel Project)

Project Overview

This project is a responsive E-Commerce web application developed using Laravel (PHP Framework) along with HTML, CSS, Bootstrap, and MySQL.
The application allows users to browse products, view product details, register/login, and manage cart items.

The project was developed using WAMP Server as the local development environment to run Apache, PHP, and MySQL.

---

Technologies Used

Frontend

- HTML5
- CSS3
- Bootstrap
- JavaScript

Backend

- PHP
- Laravel Framework

Database

- MySQL

Development Environment

- WAMP Server

Tools

- VS Code
- Git & GitHub

---

Features

- User Registration and Login System
- Product Listing Page
- Product Details Page
- Add to Cart Functionality
- Remove Items from Cart
- Trending Products Carousel
- Responsive UI using Bootstrap
- Database integration for storing product and user data

---

Project Architecture

The project follows Laravel MVC Architecture:

- Models – Handle database interaction
- Views (Blade Templates) – Display the user interface
- Controllers – Manage application logic and requests
- Routes – Define URL endpoints

---

Installation & Setup

1. Install WAMP Server

Download and install WAMP Server.

2. Clone the Repository

git clone https://github.com/jangra2025/ecommerce.git

3. Move Project Folder

Move the project folder to:

wamp64/www/

4. Install Laravel Dependencies

composer install

5. Configure Environment File

Rename ".env.example" to ".env" and configure your database connection.

6. Run Database Migration

php artisan migrate

7. Start Laravel Server

php artisan serve

8. Run the Project

Open browser:

http://127.0.0.1:8000

---

Author

Saloni 

GitHub:
https://github.com/jangra2025

---

Future Improvements

- Online payment gateway integration
- Admin panel for product management
- Product search and filtering
- Order management system
