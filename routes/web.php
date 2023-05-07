<?php

use App\Http\Controllers\HomeController;
use App\Models\Votation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $votations = Votation::with(['options' => function ($query) {
        $query->select('voting_options.*')
            ->leftJoin('votes', 'voting_options.id', '=', 'votes.voting_option_id')
            ->groupBy('voting_options.id')
            ->selectRaw('voting_options.*, COUNT(votes.id) as likes_count')
            ->orderByDesc('likes_count');
    }])->get();

    return view('home', compact('votations'));
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/votations/show/{id}', [HomeController::class, 'show'])->name('votations.show');
Route::post('/votations/like/{id}', [HomeController::class, 'like'])->name('votations.like');



Auth::routes();
