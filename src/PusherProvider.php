<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2016/12/21
 * Time: 下午2:41
 */

namespace Allen\MiPush;

use Illuminate\Support\ServiceProvider;

class PusherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pusher', function(){
            return new MiPusher();
        });
    }

}