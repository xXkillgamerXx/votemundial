<?php

namespace Database\Factories;

use App\Models\Votation;
use Illuminate\Database\Eloquent\Factories\Factory;

class VotingOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'votation_id' => function () {
                return $this->factory(Votation::class)->create()->id;
            },
            'name' => $this->faker->word,
            'photo' => 'https://i.pravatar.cc/150?img='. $this->faker->numberBetween(1,60),
            'cover_photo' => 'https://source.unsplash.com/random/1300x800/?img='. $this->faker->numberBetween(1,60),
        ];
    }

}
