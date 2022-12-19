<?php

namespace App\Providers;

use App\Services\BarclaysBankService;
use App\Services\IBankContract;
use App\Services\CoreService;
use App\Services\DummyBankService;
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
        
        
        $this->app->singleton(IBankContract::class,DummyBankService::class);
        $this->app->singleton(ICoreContract::class,CoreService::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        
    }
}
