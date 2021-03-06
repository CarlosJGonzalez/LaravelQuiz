<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instructions
- **[Clone the repository](https://github.com/CarlosJGonzalez/LaravelQuiz.git)**
- Create an environment file:
- Run php artisan migrate:fresh
- Import the SQL file (quiz-data.sql) to populate user, quiz and quizzes_options table. If you don't run migration, you could import all the database structure, data and indexes(quiz-structure-and-data.sql).
- Run the command php artisan serve and open up the app
<p>
## Relationship between tables
<img src="https://github.com/CarlosJGonzalez/LaravelQuiz/blob/master/public/assets/images/relationship.png">
</p>