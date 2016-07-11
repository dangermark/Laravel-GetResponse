# Laravel-GetResponse
A Laravel 5 wrapper for the GetResponse API

## Installation

To get the latest version of Laravel-GetResponse simply require it in your `composer.json` file.

~~~
"dangermark/laravel-getresponse": "dev-master"
~~~

You'll then need to run `composer install` to download it and have the autoloader updated.

Once Laravel-GetResponse is installed you need to register the service provider with the application. Open up `app/config/app.php` and find the `providers` key.

~~~php
<?php

'providers' => [

    Dangermark\GetResponse\GetResponseServiceProvider::class,

]
~~~

Laravel-GetResponse also ships with a facade. You can register the facade in the `aliases` key of your `app/config/app.php` file.

~~~php
<?php

'aliases' => [

    'GetResponse' => Dangermark\GetResponse\Facades\GetResponse::class,

]
~~~

Create the configuration file using artisan

~~~
$ php artisan vendor:publish
~~~

And set your own API key:

~~~php
<?php

return [

    'api_key' => env('GETRESPONSE_API_KEY')

];
~~~