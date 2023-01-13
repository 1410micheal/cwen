<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\MemberCategoriesComposer;
use App\View\Composers\VillagesViewComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
         View::composer('partials/categories/*',MemberCategoriesComposer::class);
         View::composer('partials/villages/*',VillagesViewComposer::class);
    }
}
