<?php

namespace interactivesolutions\honeycombcms\app\providers;

use Illuminate\Support\ServiceProvider;
use interactivesolutions\honeycombacl\app\providers\HCACLServiceProvider;
use interactivesolutions\honeycombcore\providers\HCCoreServiceProvider;
use interactivesolutions\honeycombcoreui\providers\HCCoreUiServiceProvider;
use interactivesolutions\honeycomblanguages\app\providers\HCLanguagesServiceProvider;
use interactivesolutions\honeycombregions\app\providers\HCRegionsServiceProvider;
use interactivesolutions\honeycombresources\app\providers\HCResourcesServiceProvider;
use interactivesolutions\honeycombscripts\app\providers\HCScriptsServiceProvider;
use interactivesolutions\honeycombslugs\app\providers\HCSlugsServiceProvider;
use interactivesolutions\honeycomburlshortener\app\providers\HCURLShortenerServiceProvider;

class HCCMSServiceProvider extends ServiceProvider
{
    /**
     * Register commands
     *
     * @var array
     */
    protected $commands = [];

    protected $namespace = 'interactivesolutions\honeycombcms\app\http\controllers';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // register artisan commands
        $this->commands($this->commands);

        // loading views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'HCCMS');

        // loading translations
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'HCCMS');

        // registering elements to publish
        $this->registerPublishElements();

        // registering helpers
        $this->registerHelpers();

        // registering routes
        $this->registerRoutes();

        //register providers
        $this->registerProviders();
    }

    /**
     * Register helper function
     */
    private function registerHelpers()
    {
        $filePath = __DIR__ . '/../http/helpers.php';

        if (\File::isFile($filePath))
            require_once $filePath;
    }

    /**
     *  Registering all vendor items which needs to be published
     */
    private function registerPublishElements ()
    {
        $directory = __DIR__ . '/../../database/migrations/';

        // Publish your migrations
        if (file_exists ($directory))
            $this->publishes ([
                __DIR__ . '/../../database/migrations/' => database_path ('/migrations'),
            ], 'migrations');

        $directory = __DIR__ . '/../public';

        // Publishing assets
        if (file_exists ($directory))
            $this->publishes ([
                __DIR__ . '/../public' => public_path ('honeycomb'),
            ], 'public');
    }

    /**
     * Registering routes
     */
    private function registerRoutes()
    {
        $filePath = __DIR__ . '/../../app/honeycomb/routes.php';

        if ($filePath)
            \Route::group (['namespace' => $this->namespace], function ($router) use ($filePath) {
                require $filePath;
            });
    }

    /**
     * Registering 3rd party providers which are required for this package to run
     */
    private function registerProviders()
    {
        $this->app->register(HCCoreUiServiceProvider::class);
        $this->app->register(HCCoreServiceProvider::class);
        $this->app->register(HCScriptsServiceProvider::class);
        $this->app->register(HCResourcesServiceProvider::class);
        $this->app->register(HCACLServiceProvider::class);
        $this->app->register(HCLanguagesServiceProvider::class);
        $this->app->register(HCRegionsServiceProvider::class);
        $this->app->register(HCSlugsServiceProvider::class);
        $this->app->register(HCURLShortenerServiceProvider::class);
    }
}


