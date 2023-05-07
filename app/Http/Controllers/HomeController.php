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

    public function like ($id){

       return Vote::firstOrCreate ([
            'voting_option_id' => $id,
            'user_id' => auth()->user()->id
        ]);


    }
}
