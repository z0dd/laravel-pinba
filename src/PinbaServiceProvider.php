<?php
/**
 * Created by PhpStorm.
 * User: z0dd
 */

namespace z0dd\Pinba;

use Illuminate\Support\ServiceProvider;
use App;
/**
 * Class AlfServiceProvider
 *
 * @package z0dd\Alf
 */
class PinbaServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);
    }
    /**
     *
     */
    public function register()
    {
        App::singleton(Pinba::class, function(){
            return new \z0dd\Pinba\Pinba();
        });
    }
}