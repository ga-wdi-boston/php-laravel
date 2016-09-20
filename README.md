[![General Assembly Logo](https://camo.githubusercontent.com/1a91b05b8f4d44b5bbfb83abac2b0996d8e26c92/687474703a2f2f692e696d6775722e636f6d2f6b6538555354712e706e67)](https://generalassemb.ly/education/web-development-immersive)

# PHP Laravel

LET'S GET CRUDDING

## Prerequisites

-   [php-guide](https://github.com/ga-wdi-boston/php-guide)
-   [php](https://github.com/ga-wdi-boston/php)

## Objectives

By the end of this, developers should be able to:

-   Utilize a working RESTful API built in PHP with Laravel

## Preparation

1.  [Fork and clone](https://github.com/ga-wdi-boston/meta/wiki/ForkAndClone)
    this repository.
1.  Create a new branch, `training`, for your work.
1.  Install dependencies with `composer install`.
1.  Ensure Vagrant is running from `~/Homestead` by running `vagrant up` there.
1.  Navigate to [http://homestead.app](http://homestead.app) to check out the fresh installation.

## Let's Get Acquainted with Laravel

### Migrations and Models

To create a database table for `examples`, we'd run to generate a migration:

```bash
php artisan make:migration create_table_examples --create="examples"
```

This migration can then be configured to add approporiate columns. I've added
`title` and `body` on top of what was generated for us.

Feel free to look deeper into [Laravel's table column types](https://laravel.com/docs/5.3/migrations).

#### Quick Aside `->` vs `=>` in PHP

##### `->`

Used for object accessing in PHP. It is not often that you will create an
object other than classes. Aside from classes, other objects you'll often
interact with are `$tables`s in your migration files.

##### `=>`

Used to set up association with key/value pairs in PHP arrays, just as we'd
been seeing.

We then run our migrations (just like in Rails!), except our DB lives on a
virtual machine. Let's `ssh` onto the box and run our migrations.

```bash
cd ~/Homestead
vagrant ssh
cd Code/
php artisan migrate
```

Then, to create a corresponding Model, we'd run:

```bash
php artisan make:model Example
```

Note that this model file exists in the root of the `Http/` directory.

Similar to Rails, if there existed a relationship between models, we'd express
that in the Model file.

### Routes

[Routes](https://laravel.com/docs/5.3/routing) are saved in the root `routes/`
directory. While it looks like it would make sense to save our routes to
 [`routes/api.php`](routes/api.php), we'll actually be saving to
[`routes/web.php`](routes/web.php).

Similar to Rails, a single route can be declared as such:

```php
Route::get('/examples', 'ExampleController@index');
Route::get('/examples/{id}', 'ExampleController@show');
```

In addition, restful resource routes can be declared as:

```php
Route::resource('examples', 'ExampleController');
```

Two things to note:

1.  For the first time, we're seeing route params wrapped in `{}`, rather than
preceded by a `:` (`/{id}` vs `/:id`). These params are sent to your controller
as an argument, rather than as part of a `params` object.
1.  `ExampleController@index` is the Laravel equivialent of Rails'
 `examples#index`.

### Controllers

[Controllers](https://laravel.com/docs/5.3/controllers) are very similar to
Rails controllers in functionality, but have plenty of their own extras.

Let's take a look at our `ExampleController` (app/Http/Controllers/ExampleController.php).

FAQS:

1.  What's that namespace?
> Laravel's wiring requires files in the `app/` directory to be namespaced. All
> this requires of you is to properly path from the root of your repository to
> your controller's class name.

1.  What's `use`?
>  This allows you to incorporate other PHP classes into your new class.

Since we're building a RESTful API, we'll almost always be returning JSON to
our client. Check out more on Laravel reponse types [here](https://laravel.com/docs/5.3/responses#other-response-types).

## Code Along: Create New Resource

Let's set up our API to handle requests for a an `Ideas` resource. We'll use
it to store ideas for web apps we could build. These ideas should have
`title`, `description` and `completed` properties.

## Additional Resources

-  [PHP Docs](http://php.net/manual/en/)
-  [Laravel 5.3 Installation Docs](https://laravel.com/docs/5.3#installing-laravel)

## [License](LICENSE)

1.  All content is licensed under a CC­BY­NC­SA 4.0 license.
1.  All software code is licensed under GNU GPLv3. For commercial use or
    alternative licensing, please contact legal@ga.co.
