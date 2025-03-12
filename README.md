

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About My Project

This project is built with PHP and Laravel framework. 

## Getting Started

- Fork and Clone this GitHub repository to your Herd folder.
- Open the terminal and run this command to install all dependencies in the composer.json file and create the "vendor/" folder.
 ```composer install```
- Create a .env file. Copy the contents of the .env.example file. Set the following environment variables:
```
DB_CONNECTION=sqlite
APP_URL=http://laracasts-30days.test/
```
- Run this command in the terminal to create the APP_KEY environment variable. 
```
 php artisan key:generate
```
- Run this command to create the database.sqlite file.
```php artisan migrate```
- Run this command to open Tinker. 
```php artisan tinker```
- Run this command to create 10 fake jobs 
```
App\Models\Job::factory(10)->create();
```
Visit http://laracasts-30days.test/jobs to see your 10 random job listings.
Open TablePlus and connect to the database.sqlite file.
