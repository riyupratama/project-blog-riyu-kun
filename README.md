# Laravel Project Blog Posts
## Riyu-kun Blog

This is my firts project used laravel. U can use this project for free if u need.
I apologize if my project has many shortcomings. Enjoy :)

## Features
Writer feature:
- Register and login user (writer)
- CRUD Post (write feature)
- Search post

Home page Feature:
- Sort post by category
- Search post
- Pagination
- Static about page
- Show writer profile page and their posts

## Tech

Built using several technologies including:

- Laravel
- Bootstrap
- Mysql

## Installation

Requires Laravel v10 to run.

```sh
- git clone https://github.com/riyupratama/project-blog-riyu-kun.git
- cd project_blog_riyu_kun
- composer install
- duplikat file .env-example kemudian ubah jadi .env
- php artisan key:generate
- setting di file .env DB_DATABASE=db_laravel_crud
- create database = db-laravel-crud
- php artisan migrate
- php artisan db:seed
- php artisan storage:link
- php artisan db:seed --class=UserSeeder
- php artisan db:seed --class=PostSeeder
- php artisan serve

```

## Default user

Email = see in database user after you have run UserSeeder
Password = 123123
