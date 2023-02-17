<?php
namespace App\Repositories;

use App\Models\DistributionChannel;
use App\Models\InfoChannel;
use App\Models\ProcessingMethod;
use App\Models\Training;
use Illuminate\Http\Request;

class CommonRepository{

    public function __construct(){

    }



    public function get_channels(){

        $channels = DistributionChannel::paginate(15);
        return $channels;
    }

    public function get_trainings(){

        $trainings = Training::paginate(15);
        return $trainings;
    }
   

    public function get_processing_methods(){

        $methods = ProcessingMethod::paginate(15);
        return $methods;
    } 

    public function get_info_channels(){

        $infochannels = InfoChannel::paginate(15);
        return $infochannels;
    } 

    public function save_info_channel(Request $request){

        $channel = new InfoChannel();
        $channel->infochannel_name           = $request->infochannel_name;
      
        return $channel->save();
    }
    
    public function save_channel(Request $request){

        $channel = new DistributionChannel();
        $channel->channel_name           = $request->channel_name;
      
        return $channel->save();
    }

    public function save_training(Request $request){

        $training = new Training();

        $training->training_name = $request->training_name;
        $training->training_desc = $request->training_desc;

        return $training->save();
    }

    public function save_method(Request $request){

        $method = new ProcessingMethod();

        $method->method_name = $request->method_name;

        return $method->save();
    }



}