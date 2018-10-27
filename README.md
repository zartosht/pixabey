zartosht/pixabey
================

Custom PHP Pixabey library for the Laravel 5.* framework - developed by [Zartosht](http://zartoshtsepideman.com).

The package provides an easy interface for sending interacting with [Pixabey](https://pixabey.com) REST API requests from your Laravel web application. 

 > Note before posting an issue: When posting an issue for the package, always be sure to provide as much information 
 > regarding the request as possible. This includes the example cURL request you are trying to transfer into the package
 > syntax, your actual package syntax (the full request) and (if possible) an example URL I can use to test the request
 > myself if need be.

## Installation

Pull this package in through Composer.

```js

    {
        "require": {
            "zartosht/pixabey": "*"
        }
    }

```

or run in terminal:
`composer require zartosht/pixabey`

### Laravel 5.5+ Integration

Laravel's package discovery will take care of integration for you.


### Laravel 5.* Integration

Add the service provider to your `config/app.php` file:

```php

    'providers'     => [

        //...
        Zartosht\Pixabey\PixabeyServiceProvider::class,

    ],

```

Add the facade to your `config/app.php` file:

```php

    'aliases'       => [

        //...
        'Pixabey'          => Zartosht\Pixabey\Facades\Pixabey::class,

    ],

```

### Laravel 4.* Integration

Add the service provider to your `app/config/app.php` file:

```php

    'providers'     => [

        //...
        'Zartosht\Pixabey\PixabeyServiceProvider',

    ],

```

Add the facade to your `app/config/app.php` file:

```php

    'facades'       => [

        //...
        'Pixabey'          => 'Zartosht\Pixabey\Facades\Pixabey',

    ],

```


### Lumen 5.* integration

In your `bootstrap/app.php`, make sure you've un-commented the following line (around line 26):

```
$app->withFacades();
```

Then, register your class alias:
```
class_alias('Zartosht\Pixabey\Facades\Pixabey', 'Pixabey');
```

Finally, you have to register your ServiceProvider (around line 70-80):

```
/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

// $app->register('App\Providers\AppServiceProvider');

// Package service providers
$app->register(Zartosht\Pixabey\PixabeyServiceProvider::class);
```


## Usage

The package provides an easy interface for interactine with [Pixabey](https://pixabey.com) REST API for getting images,
videos, etc. first you have to sign up in their website, for doing so, [click here](https://pixabay.com/en/accounts/register/),
and form bottom of [this page](https://pixabay.com/api/docs/) you can provide a description for your app and usually they will
contact you within 24 hours.

### Sending GET requests

In order to send a `GET` request, you need to use the `get()` method that is provided by the package:

```php

    use Ixudra\Curl\Facades\Curl;

    // Get Fashion Images that are safe
    \Zartosht\Pixabey\Facades\Pixabey::Search()->Fashions()->SafeSearch()->get()

    // Get Animal images page 2 by 100 per page pagination
    \Zartosht\Pixabey\Facades\Pixabey::Search()->Animals()->PerPage(100)->get()

```


### Using Pixabey options



## Contact

For any other questions, feel free to use the credentials listed below: 

Zartosht Sepideman (developer)

- Email: me@zartoshtsepideman.com
