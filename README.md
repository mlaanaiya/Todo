<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Todo Application

This is a simple Todo application built with Laravel. It allows you to manage your tasks and keep track of your to-do list.

## Prerequisites

Before running this application, make sure you have the following prerequisites installed:

- PHP (version 7.4 or higher)
- Composer
- MySQL (or any other compatible database)
- Node.js (for asset compilation)

## Getting Started

1. Clone the repository:

   ```
   git clone https://github.com/mlaanaiya/Todo.git
   ```
2. Navigate to the project directory:
   ```cd todo```
   
3. Install PHP dependencies:
```composer install```

4. Copy the .env.example file to .env:
``` cp .env.example .env ```

5. Generate the application key:
    ```php artisan key:generate```
    
6. Configure the database in the .env file:
```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=
```

7. Run the database migrations:

```
php artisan migrate
```

8. Install JavaScript dependencies:
```npm install```

9. Compile the assets:
```
npm run dev
```
10. Start the development server:

```
php artisan serve
```
   
