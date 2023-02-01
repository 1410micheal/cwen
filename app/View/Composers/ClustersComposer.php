<?php
namespace App\View\Composers;

use App\Models\BusinessType;
use App\Models\Cluster;

class ClustersComposer{

    public function compose($view){
    	$regulators = Cluster::all();
        $view->with('clusters',$regulators);
    }
}