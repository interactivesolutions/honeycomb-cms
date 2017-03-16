<?php

namespace interactivesolutions\honeycombcms\app\providers;

use interactivesolutions\honeycombacl\app\providers\HCACLServiceProvider;
use interactivesolutions\honeycombcore\providers\HCBaseServiceProvider;
use interactivesolutions\honeycombcore\providers\HCCoreServiceProvider;
use interactivesolutions\honeycombcoreui\providers\HCCoreUiServiceProvider;
use interactivesolutions\honeycomblanguages\app\providers\HCLanguagesServiceProvider;
use interactivesolutions\honeycombregions\app\providers\HCRegionsServiceProvider;
use interactivesolutions\honeycombresources\app\providers\HCResourcesServiceProvider;
use interactivesolutions\honeycombscripts\app\providers\HCScriptsServiceProvider;
use interactivesolutions\honeycombslugs\app\providers\HCSlugsServiceProvider;
use interactivesolutions\honeycomburlshortener\app\providers\HCURLShortenerServiceProvider;

class HCCMSServiceProvider extends HCBaseServiceProvider
{
    /**
     * Register commands
     *
     * @var array
     */
    protected $commands = [];

    protected $namespace = 'interactivesolutions\honeycombcms\app\http\controllers';

    /**
     * Registering 3rd party providers which are required for this package to run
     */
    protected function registerProviders()
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


