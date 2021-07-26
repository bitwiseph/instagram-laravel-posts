<?php
namespace Bitwiseph\InstagramMedia;
use Illuminate\Support\ServiceProvider;
class InstagramMediaServiceProvider extends  ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','instagram-media');
        $this->publishes([
            __DIR__ .'/config/bitwiseph.php' => config_path('bitwiseph.php')
        ],'bitwiseph-instagram');

    }

    public function register()
    {

    }
}
