<?php

namespace interactivesolutions\honeycombcms\app\providers;

use interactivesolutions\honeycombacl\app\providers\HCACLServiceProvider;
use interactivesolutions\honeycombapps\app\providers\HCAppsServiceProvider;
use interactivesolutions\honeycombcore\providers\HCBaseServiceProvider;
use interactivesolutions\honeycombcore\providers\HCCoreServiceProvider;
use interactivesolutions\honeycombcoreui\providers\HCCoreUiServiceProvider;
use interactivesolutions\honeycombgalleries\app\providers\HCGalleriesServiceProvider;
use interactivesolutions\honeycomblanguages\app\providers\HCLanguagesServiceProvider;
use interactivesolutions\honeycombpages\app\providers\HCPagesServiceProvider;
use interactivesolutions\honeycombregions\app\providers\HCRegionsServiceProvider;
use interactivesolutions\honeycombresources\app\providers\HCResourcesServiceProvider;
use interactivesolutions\honeycombscripts\app\providers\HCScriptsServiceProvider;
use interactivesolutions\honeycombslugs\app\providers\HCSlugsServiceProvider;
use interactivesolutions\honeycombtranslations\app\providers\HCTranslationsServiceProvider;
use interactivesolutions\honeycomburlshortener\app\providers\HCURLShortenerServiceProvider;

class HCCMSServiceProvider extends HCBaseServiceProvider
{
    protected $homeDirectory = __DIR__;

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
        $this->app->register(HCAppsServiceProvider::class);
        $this->app->register(HCGalleriesServiceProvider::class);
        $this->app->register(HCPagesServiceProvider::class);
        $this->app->register(HCTranslationsServiceProvider::class);
    }
}


