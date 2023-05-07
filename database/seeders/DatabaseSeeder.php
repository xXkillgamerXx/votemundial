<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Votation;
use App\Models\Vote;
use App\Models\VotingOption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(User::class)->create([
            'name' => 'admin',
            'email' => 'ronnycorreaunity@gmail.com',
            'password' => Hash::make('password'),
            'avatar_url' => 'https://i.pravatar.cc/150?img=1',
            'role_id' => 1
        ]);

        // Crear 5 votaciones
        $votations = Votation::factory(5)->create();

        // Crear 10 opciones de votación para cada votación
        $votations->each(function ($votation) {
            $votingOptions = VotingOption::factory(10)->create([
                'votation_id' => $votation->id,
            ]);

            // Asignar likes aleatorios entre 10 y 100 a cada opción de votación
            $votingOptions->each(function ($votingOption) {
//                $likes = rand(10, 100);
//
//                for ($i = 0; $i < $likes; $i++) {
//                    $user = User::factory()->create();
//
//                    Vote::factory()->create([
//                        'voting_option_id' => $votingOption->id,
//                        'user_id' => $user->id,
//                    ]);
//                }
            });
        });

    }
}
