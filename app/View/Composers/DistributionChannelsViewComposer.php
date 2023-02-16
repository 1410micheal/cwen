<?php
namespace App\View\Composers;

use App\Models\DistributionChannel;
use Illuminate\View\View;

class DistributionChannelsViewComposer{

    public function compose(View $view){

    	$channels = DistributionChannel::all();
        $view->with('channels',$channels);
    }
}