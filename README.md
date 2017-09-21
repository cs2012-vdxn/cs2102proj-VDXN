# cs2102proj-VDXN
CS2102 Database Systems PHP, Postgres web app using the Laravel framework

## What you'll need
* Download & install PHP's dependency management tool `Composer` [here](https://getcomposer.org/download/)
* Install `Laravel` [here](https://laravel.com/docs/5.5/installation)
* Download / Clone this repo
* Fresh database (you can create a new one using pgAdmin4)

## Setting up your DB credentials, linking the app to your DB & setting up your local postgres DB schemas
**Note:** I did not upload my `.env` file since it contains my own local DB credentials, but you can refer to the uploaded `.env.example` file for an example of what fields to change. All fields in `[]` square brackets are what you'll need to change for your project.

1. Run `php artisan migrate` to create 2 default tables provided by Laravel, `users` & `password_resets`, which are used for simple authentication.

## Run this project
1. Run `php artisan key:generate` to generate an `APP_KEY` for your project. Your `APP_KEY` is located in 3rd line of your `.env` file.

2. Run `php artisan serve`. Verify that your app running at `localhost:8000`.

## Done!
* We'll probably be changing a lot of stuff in this project, but I hope this helps us create a simple starter project easily

## Common Problems

