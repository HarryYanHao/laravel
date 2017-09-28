<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;

use Riak\Connection;


class RiakServiceProvider extends ServiceProvider
{

    /**
     * 指定是否延缓提供者加载。
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Riak\Contracts\Connection', function ($app) {
            return new Connection($app['config']['riak']);
        });
    }
    /**
     * 取得提供者所提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return ['Riak\Contracts\Connection'];
    }
}
