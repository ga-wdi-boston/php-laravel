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

## Getting Acquainted with Laravel

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

## Additional Resources

-  [PHP Docs](http://php.net/manual/en/)
-  [Laravel 5.3 Installation Docs](https://laravel.com/docs/5.3#installing-laravel)

## [License](LICENSE)

1.  All content is licensed under a CC­BY­NC­SA 4.0 license.
1.  All software code is licensed under GNU GPLv3. For commercial use or
    alternative licensing, please contact legal@ga.co.
