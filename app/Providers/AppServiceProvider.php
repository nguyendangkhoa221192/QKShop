<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('loadLocalCSS', function ($filePath) {
            $path = public_path($filePath);
            if (file_exists($path)) {
                return "<link rel='stylesheet' href='". $filePath . "?date=" . \File::lastModified($path)."'>";
            }
            return STR_EMPTY;
        });
        Blade::directive('loadLocalJS', function ($filePath) {
            $path = public_path($filePath);
            if (file_exists($path)) {
                return "<script src='" . $filePath . "?date=" .\File::lastModified($path) ."'></script>";
            }
            return STR_EMPTY;
        });

        Blade::directive('loadeExternalJS', function ($filePath) {
            return "<script src='" . $filePath . "'></script>";
        });
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PRODUCT_API_SERVICE, 'App\Services\Api\ProductApiService');
        $this->app->bind(API_USER_SERVICE, 'App\Services\Api\ApiUserService');
    }
}
