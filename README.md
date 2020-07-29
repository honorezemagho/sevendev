#SevenDev

## How to setup the project

Run the command `cp .env.example .env` to copy the basic environment file.

Make sure that you have composer installed in your computer. If not you can chekout this [link](https://getcomposer.org/download/)

Run the command `composer install` to install require composer packages.

***
Make sure that you have   `MYSQL` install if not checkout this [link](https://dev.mysql.com/downloads/mysql/).

Setup your database and modify the `.env` file according to that.

Run `php artisan migrate` to migrate all migrations to the database.

Now you can run `php artisan serve`. You can visit the http://127.0.0.1:8000/register to register a user or http://127.0.0.1:8000/login to login
