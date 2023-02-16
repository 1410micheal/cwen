<?php

namespace App\Providers;

use App\View\Composers\BusinessTypesCompoer;
use App\View\Composers\BusinessTypesComposer;
use App\View\Composers\ClustersComposer;
use App\View\Composers\DistrictsComposer;
use App\View\Composers\GroupsViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\MemberCategoriesComposer;
use App\View\Composers\OffenceTypeViewComposer;
use App\View\Composers\ProductTypeViewComposer;
use App\View\Composers\RegulatorsComposer;
use App\View\Composers\ServicesViewComposer;
use App\View\Composers\TrainingsViewComposer;
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
         View::composer('members/*',BusinessTypesComposer::class);
         View::composer('members/*',RegulatorsComposer::class);
         View::composer('partials/*',ClustersComposer::class);
         View::composer('partials/*',DistrictsComposer::class);
         View::composer('partials/members/*',GroupsViewComposer::class);
         View::composer('partials/products/*',ProductTypeViewComposer::class);
         View::composer('partials/offences/*',OffenceTypeViewComposer::class);
         View::composer('partials/services/*',ServicesViewComposer::class);
         View::composer('partials/trainings/*',TrainingsViewComposer::class);
         
    }
}
