<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            'company_id' => rand(1,10),
            'image_url' =>$this->faker->imageUrl()

        ];
    }
}
