<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display the login page.
     */
    public function index()
    {
        $games = Game::all();
        return view("games.index", ['games' => $games]);
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view("games.show", [ "game" => $game]);
    }
}
