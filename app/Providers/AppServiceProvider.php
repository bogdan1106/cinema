<?php

namespace App\Providers;

use App\Genre;
use function foo\func;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

        public function boot()
    {
        View::composer('pages.layout', function($view) {
            $view->with([
                'genres1' => Genre::select('id', 'title', 'slug')->whereBetween('id',[6, 11])->get(),
                'genres2' => Genre::select('id', 'title', 'slug')->whereBetween('id',[12, 18])->get(),
                'genres3' => Genre::select('id', 'title', 'slug')->whereBetween('id',[19, 24])->get(),
                ]);
        });


    }
}
