# honeycomb-cms
Main HoneyComb package to install all core functionality of the CMS

## Installation

Begin by installing this package through Composer.


```js
	{
	    "require": {
	        "interactivesolutions/honeycomb-cms": "*"
	    }
	}
```
or
```js
    composer require interactivesolutions/honeycomb-cms
```

## Laravel installation

Firstly register the service provider and Facade by opening `config/app.php`

    interactivesolutions\honeycombcms\app\providers\HCCMSServiceProvider::class,

Dump the composer

    composer dump
    
Run command for deleting default laravel project files and creating HoneyComb CMS ready structure

    php artisan hc:new-project
    
Dump the composer

    composer dump
    
Finally run last command to update all of the HoneyComb CMS environment. Make sure you have .env file filled. This required db connection.

    php artisan hc:update
