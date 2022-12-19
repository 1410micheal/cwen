<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\InstitutionsComposer;
use App\Models\Institution;

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
        //avail institutions in all aprtials that need them
        View::composer('partials/institutions/*', function($view){

            $view->with('institutions', []);
            
        });

         View::composer('partials/accounts/*',InstitutionsComposer::class);
    }
}
