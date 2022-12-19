<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LoggerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
   
    protected $key;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($key,$data)
    {
        $this->key    = $key;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       $message = $this->data;
       $key     = $this->key;
       
        $break="";
       if(is_array($message) || is_object($message)){
        
         $break="\n";
         if(isset($message->password))
          $message['password']="*******";
          $message['customer_acc_number']="***************";
          $message = json_encode($message);
          Log::info($key); 
       }
       Log::info($break.$key.$message);
    }

}
