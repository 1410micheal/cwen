<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\MemberCategoriesComposer;

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
        //avail members in all aprtials that need them
        View::composer('partials/categories/*', function($view){

            $view->with('categories', []);
            
        });

         View::composer('partials/categories/*',MemberCategoriesComposer::class);
    }
}
