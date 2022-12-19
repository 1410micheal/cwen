<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OtpVerification extends Component
{
    public function render()
    {
        return view('livewire.otp-verification')
        ->layout('layouts.custom-app');;
    }
}
