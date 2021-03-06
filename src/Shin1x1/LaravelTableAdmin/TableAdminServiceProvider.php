<?php
namespace Shin1x1\LaravelTableAdmin;

use Illuminate\Support\ServiceProvider;

/**
 * Class TableAdminServiceProvider
 * @package Shin1x1\LaravelTableAdmin
 */
class TableAdminServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('shin1x1/' . TableAdmin::PACKAGE_NAME);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('table-admin', function($app)
        {
            return new TableAdminFacade();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
