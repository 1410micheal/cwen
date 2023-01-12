<?php

namespace App\Http\Livewire;

use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;
use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('settings.index');
    }

    public function general(Request $request, SettingsRepository $settingsRepo)
    {
        $data['settings'] = $settingsRepo->get();
        return view('settings.general',$data);
    }

    public function store(Request $request, SettingsRepository $settingsRepo)
    {
        $saved = $settingsRepo->save($request);
        return back()->with(['alert-success'=>'Changes saved successfully']);
    }
}
