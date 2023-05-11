<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Votation;
use App\Models\VotingOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'voting_id_id' => function () {
                return $this->factory(Votation::class)->create()->id;
            },
            'voting_option_id' => function () {
                return $this->factory(VotingOption::class)->create()->id;
            },
            'user_id' => function () {
                return $this->factory(User::class)->create()->id;
            },
        ];
    }
}
