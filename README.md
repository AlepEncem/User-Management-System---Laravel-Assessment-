# User Management System - Laravel Assessment

## Overview
A comprehensive User Management System built with Laravel featuring both Admin Panel and RESTful API endpoints.

## Features
- ✅ Complete CRUD operations for users
- ✅ Admin panel interface
- ✅ RESTful API endpoints
- ✅ Soft delete functionality
- ✅ Bulk delete operations
- ✅ Status filtering and search
- ✅ Pagination support
- ✅ Form validation using Laravel Form Requests

## Requirements
- PHP 8.2+
- MySQL 5.7+
- Composer
- Laravel 11.x

## Installation

1. Clone the repository:
```bash
git clone [your-repo-url]
cd testing_laravel
```

2. Install dependencies:

```bash
composer install
```

3. Copy environment file:

```bash
copy .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Configure database in .env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_management_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
6. Run migrations and seeders:

```bash
php artisan migrate
php artisan db:seed
```

7. Start the server:

```bash
php artisan serve
```

Pagination: Implemented for better performance with large datasets
Status Enum: Used active/inactive status for user management

Author- Alif Firdaus
