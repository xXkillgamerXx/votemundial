<?php

namespace App\Http\Controllers;

use App\Models\Votation;
use App\Models\Vote;
use Carbon\Carbon;
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

        $fechaActual = Carbon::now();

        $end_date = Carbon::parse($votation->end_date);

        // Compara la fecha actual con la fecha límite
        if ($fechaActual->gte($end_date)) {
            // La fecha actual es mayor o igual a la fecha límite, no puedes votar
            // return "Ya no puedes votar. " . $votation->end_date . " " . $fechaActual;
        } else {
            // La fecha actual es menor a la fecha límite, puedes votar
           // return "Puedes votar. " . $votation->end_date . " " . $fechaActual;
        }

        return view('votations.show', compact('votation'));
    }

    public function like ($id, Request $request)
    {
        $userId = auth()->user()->id;

        // Verificar si el usuario ya ha votacion por esta opción
        $existingVotation = Vote::where('votation_id', $request->votation_id)
            ->where('user_id', $userId)
            ->first();

        // Verificar si el usuario ya ha votado por esta opción
        $existingVote = Vote::where('voting_option_id', $id)
            ->where('user_id', $userId)
            ->first();

        if($existingVotation){
            return response()->json(['error' => 'Ya has votado por esta opción.'], 400);
        }

        if ($existingVote) {
            // El usuario ya ha votado por esta opción, puedes mostrar un mensaje de error o manejarlo como desees
            return response()->json(['error' => 'Ya has votado por esta opción.'], 400);
        }

        // Si el usuario no ha votado por esta opción, crea un nuevo voto
        $vote = Vote::create([
            'votation_id' => $request->votation_id,
            'voting_option_id' => $id,
            'user_id' => $userId
        ]);

        // El voto se ha registrado exitosamente
        return response()->json(['message' => 'Voto registrado.'], 200);
    }
}
