# Laravel Multilingual Architecture

A Multilingual Architecture with Laravel 5.6 PHP Framework. The Demo contains a simple multilingual blogging system with SEO meta-data generation.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

See: <br />
https://laravel.com/docs/5.6/installation#server-requirements


### Installing

Create your .env file from .env.example. <br />
Set-up the database connections.

Generate the application's APP_KEY:

```
php artisan key:generate
```

And run migrations:

```
php artisan migrate
```

Run the database seeder in case you need dummy data. <br />
Generated by Faker - https://github.com/fzaninotto/Faker.

```
php artisan db:seed
```

Run composer:

```
composer update
```


## The Architecture

* **Following the general MVC pattern.** <br />
The **Models** can be found in the app/Models/ folder.

Defined Service Providers:
* App\Providers\PostServiceProvider
* App\Providers\SeoServiceProvider

The **Service** Interfaces and their implementations can be found in the app/Services/ folder <br />
The **Controllers** can be found in the app/Http/Controllers/ folder. <br />
The **Views** can be found in the resources/views/ folder.


* **Routing** <br />
The Public Web Routes are defined in the routes/web/web.php file. <br />
The Authorized Web Routes are defined in the routes/web/admin.php file. <br />
See available routes:

```
php artisan route:list
```


* **Localization** <br />
The default locales are 'hu' and 'en'. <br />
To enable other locales change the supportedLocales key in the config file laravellocalization.php


* **Compiling Assets** <br />
Webpack is used.

See: <br />
https://laravel.com/docs/5.6/mix

For development (Run all Mix tasks)

```
npm run dev
```

For production (Run all Mix tasks and minify output)

```
npm run production
```


* **Admin Page** <br />
To see the Admin Page use route: /login <br />
And the dummy user credentials (after db:seed): <br />
user: admin@test.com <br />
password: admin

## Running the tests

Set-up a test database trough the env variable DB_TEST_DATABASE. <br />
Run migration on the test database:

```
php artisan migrate --database=testing
```

Run unit tests with PHP Unit:

```
vendor/bin/phpunit
```

For writing unit tests see example: Tests\Unit\PostTest.php

Useful information:
* https://laravel.com/docs/5.6/testing
* https://phpunit.de/manual/6.5/en/appendixes.assertions.html

## Deployment

See:
https://laravel.com/docs/5.6/deployment

You can also run the deploy script. <br />
For more information see the file deploy.sh

```
./deploy.sh
```

## Built With

* [Laravel 5.6](https://laravel.com/) - The PHP Framework
* [Composer](https://getcomposer.org/) - Dependency Manager for PHP
* [Bootstrap 4](https://getbootstrap.com/) - Front-end component library
* [NPM](https://www.npmjs.com/) - Package manager for javascript


## Authors

* **Gergő Tar** - *Initial work* - [tgalfa](https://github.com/tgalfa)


## License

This project is licensed under the MIT License.

## Acknowledgments

First of all thanks to the Laravel Team for building this awesome framework.
https://github.com/laravel/laravel

Thanks:
* Digital creative studio for the package laravel-html-bootstrap-4: https://github.com/marvinlabs/laravel-html-bootstrap-4
* Barry vd. Heuvel for the package laravel-debugbar: https://github.com/barryvdh/laravel-debugbar
* Artesãos for the package seotools: https://github.com/artesaos/seotools
* Modern Web Development squad for the package laravel-seoable: https://github.com/mad-web/laravel-seoable
* Marc Cámara for the package laravel-localization: https://github.com/mcamara/laravel-localization
* Conrad Carpenter for the package laravel-localization-route-cache: https://github.com/czim/laravel-localization-route-cache
* Dimitris Savvopoulos for the package laravel-translatable: https://github.com/dimsav/laravel-translatable
* Colin Viebrock for the package eloquent-sluggable: https://github.com/cviebrock/eloquent-sluggable
* Intervention for the PHP Image Manipulation package: https://github.com/Intervention/image