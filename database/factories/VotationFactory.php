<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'color' => $this->faker->hexColor,
            'end_date' => $this->faker->dateTimeBetween('+2 months', '+3 months'),
        ];
    }
}
