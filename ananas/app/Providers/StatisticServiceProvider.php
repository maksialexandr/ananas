<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\StatisticService;


class StatisticServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('App\Http\Services\StatisticService', function () {
            return new StatisticService();
        });
    }
}