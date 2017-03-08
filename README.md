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
    
Change user providers model in `config/auth.php`

    'model' => interactivesolutions\honeycombacl\app\models\HCUsers::class,
    
We strongly recommend to use `'charset' => 'utf8mb4'` and `'collation' => 'utf8mb4_unicode_ci'` in `config/database.php` 

Run command for deleting default laravel project files and creating HoneyComb CMS ready structure

    php artisan make:hcproject
    
Finally run last command to update all of the HoneyComb CMS environment

    php artisan hc:update
