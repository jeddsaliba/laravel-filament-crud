# Laravel CRUD

This project was generated with [Laravel](https://laravel.com/) and [Filament](https://filamentphp.com).

The purpose of this project is to showcase a Laravel Filament Project with basic CRUD functionalities.

## Table of Contents
[Installation](#installation)<br/>
[Setup Local Environment](#environment)<br/>
[Database](#database)<br/>
[Create Administrator Account](#create-admin-account)<br/>
[Development Server](#development-server)<br/>
[Administrator Panel](#administrator-panel)<br/>
[Support](#support)

<a name="installation"></a>
## Installation
Install the `dependencies` by running:

```bash
composer install
```

<a name="environment"></a>
## Setup Local Environment
Generate a new `.env` file by running:

```bash
cp .env.example .env
```

Open your `.env` file and set the database configuration by updating the following:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

There are cases where images could not load properly. If this happens to you, please follow these steps:
1. Open your `.env` file and change `APP_URL=http://localhost` to `APP_URL=http://localhost:8000`
2. Open your terminal and run this command:
```bash
php artisan storage:link
```

<a name="database"></a>
## Database
Assuming that you have already created an empty database, run this command to migrate the database tables:

```bash
php artisan migrate
```

<a name="create-admin-account"></a>
## Create Administrator Account
In order to create an administrator account, run this command:

```bash
php artisan make:filament-user
```

<a name="development-server"></a>
## Development Server
In order for this project to run on your local environment, run this command:

```bash
php artisan serve
```

<a name="administrator-panel"></a>
## Administrator Panel
Once everything is set up, you can now go to your admin panel by opening your browser and going to this URL:

[http://localhost:8000/admin](http://localhost:8000/admin)

<a name="support"></a>
## Support
For support, email jeddsaliba@gmail.com.
