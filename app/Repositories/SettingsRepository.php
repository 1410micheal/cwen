<?php
namespace App\Repositories;
use App\Models\Setting;

class SettingsRepository{

    public function __construct(){

    }

    public function get(){

        $settings = Setting::first();
        return $settings;
    }


    public function save($data){

        $settings = new Setting();

        $settings->system_name      = $data->system_name;
        $settings->meta_description = $data->meta_description;
        $settings->password_expiration_days  = $data->pass_expiry;
        $settings->two_factor_enabled        = $data->enable_two_factor;
        $settings->system_email              = $data->system_email;

        $settings->save();

        return $settings;
    }


}