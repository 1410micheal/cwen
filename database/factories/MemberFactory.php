<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'date_registered'=> Carbon::now(),
           'unique_id'=>Str::random(10),
           'first_name' =>$this->faker->name,
           'middle_name'=>$this->faker->name,
           'last_name'  =>$this->faker->name,
           'member_category_id'=>mt_rand(1,5),
            'dob'=>Carbon::now(),
            'age'=>mt_rand(18,80),
           'gender'=>"Male",
           'marital_status'=>"Single",
           'village_id'=>1,
           'email'=>$this->faker->unique->name,
           'telephone'=>$this->faker->unique->name,
           'hiv_status'=>'Negative',
           'education_level'=>"Degree"
        ];
    }
}
