<?php

namespace App\Http\Controllers;

use App\Models\Votation;
use App\Models\Vote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $votations = Votation::with(['options' => function ($query) {
            $query->select('voting_options.*')
                ->leftJoin('votes', 'voting_options.id', '=', 'votes.voting_option_id')
                ->groupBy('voting_options.id')
                ->selectRaw('voting_options.*, COUNT(votes.id) as likes_count')
                ->orderByDesc('likes_count');
        }])->get();


        return view('home', compact('votations'));
    }

    public function show ($id)
    {
        $votation = Votation::where('id', $id)->with(['options' => function ($query) {
            $query->select('voting_options.*')
                ->leftJoin('votes', 'voting_options.id', '=', 'votes.voting_option_id')
                ->groupBy('voting_options.id')
                ->selectRaw('voting_options.*, COUNT(votes.id) as likes_count')
                ->orderByDesc('likes_count');
        }])->firstOrFail();

        return view('votations.show', compact('votation'));
    }

    public function like ($id)
    {
        $userId = auth()->user()->id;

        // Verificar si el usuario ya ha votado por esta opción
        $existingVote = Vote::where('voting_option_id', $id)
            ->where('user_id', $userId)
            ->first();

        if ($existingVote) {
            // El usuario ya ha votado por esta opción, puedes mostrar un mensaje de error o manejarlo como desees
            return response()->json(['error' => 'Ya has votado por esta opción.'], 400);
        }

        // Si el usuario no ha votado por esta opción, crea un nuevo voto
        $vote = Vote::create([
            'voting_option_id' => $id,
            'user_id' => $userId
        ]);

        // El voto se ha registrado exitosamente
        return response()->json(['message' => 'Voto registrado.'], 200);
    }
}
