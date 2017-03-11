# honeycomb-cms
Main HoneyComb package to install all core functionality of the CMS

## Installation

Begin by installing this package through Composer.


```js
	{
	    "require": {
	        "interactivesolutions/honeycomb-cms": "dev-master"
	    }
	}
```
or
```js
    composer require interactivesolutions/honeycomb-cms dev-master
```

## Laravel installation

Firstly register the service provider and Facade by opening `config/app.php`

    interactivesolutions\honeycombcms\app\providers\HCCMSServiceProvider::class,
    
Run command for deleting default laravel project files and creating HoneyComb CMS ready structure

    php artisan make:hcproject
    
Finally run last command to update all of the HoneyComb CMS environment

    php artisan hc:update
