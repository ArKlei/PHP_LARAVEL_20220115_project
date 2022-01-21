<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            // // ID
            // name(string)
            // type(string)
            // description(string)

            'name' => $this->faker->company(),
            'type_id' => $this->faker->numberBetween(1,4)
            'description' => $this->faker->paragraph(15)
        ];
        
        //return [
        //    'name' => $this->faker->company(),
        //    'type' =>'Juridinis asmuo',
        //    'description' => $this->faker->paragraph(15),
        //];
    }
}
