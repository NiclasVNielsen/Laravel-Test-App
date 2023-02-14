<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TreasureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'tale' => $this->faker->text(255),
            'value' => $this->faker->randomNumber(5)
        ];
    }
}
