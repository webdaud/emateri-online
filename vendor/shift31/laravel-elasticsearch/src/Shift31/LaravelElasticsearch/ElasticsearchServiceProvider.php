<?php namespace Shift31\LaravelElasticsearch;

use Elasticsearch\Client;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;


/**
 * Class ElasticsearchServiceProvider
 *
 * ServiceProvider compatible with Laravel 5
 *
 * @package Shift31\LaravelElasticsearch
 */
class ElasticsearchServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Elasticsearch\Client', function () {

            $connParams = array();
            $connParams['hosts'] = ['localhost:9200'];
            $connParams['logPath'] = storage_path() . '/logs/elasticsearch.log';
            $connParams['logLevel'] = Logger::INFO;

            // merge settings from app/config/elasticsearch.php
            $params = array_merge($connParams, $this->app['config']->get('elasticsearch', array()));

            return new Client($params);
        });

        $this->app->alias('Elasticsearch\Client', 'elasticsearch');


        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Es', 'Shift31\LaravelElasticsearch\Facades\Es');
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['elasticsearch', 'Elasticsearch\Client'];
    }

}