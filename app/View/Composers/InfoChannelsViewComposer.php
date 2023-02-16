<?php
namespace App\View\Composers;

use App\Models\InfoChannel;

class InfoChannelsViewComposer{

    public function compose($view){
    	$infochannels = InfoChannel::all();
        $view->with('infochannels',$infochannels);
    }
}