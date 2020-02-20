<?php
/**
 * Created by PhpStorm.
 * User: Barbaros
 * Date: 20.02.2020
 * Time: 14:11
 */

namespace App\Providers;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client as DropboxClient;
use Illuminate\Support\ServiceProvider;
use Spatie\FlysystemDropbox\DropboxAdapter;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Выполнение послерегистрационной загрузки сервисов.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                $config['authorizationToken']
            );

            return new Filesystem(new DropboxAdapter($client));
        });
    }

    /**
     * Регистрация привязок в контейнере.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}