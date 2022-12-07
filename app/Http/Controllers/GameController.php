<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::with('genres')
            ->latest()
            ->paginate(9);

        return view('games.index', compact('games'))->with(
            'i',
            (request()->input('page', 1) - 1) * 12
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::where('genre_id', null)->with('children')->get();

        return view('games.create', compact('genres'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::with('genres')->findOrFail($id);

        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::with('genres')->findOrFail($id);
        $genres = Genre::where('genre_id', null)->with('children')->get();

        return view('games.edit', compact('game', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'price'        => 'required|gt:0',
            'publisher'    => 'required',
            'developer'    => 'required',
            'release_date' => 'required',
            'age_rating'   => 'required',
            'description'  => 'required',
            'image'        => 'required|image|max:200|dimensions:width=460,height=215',
        ]);

        // Store the image
        $path = hash('sha1', time().$request->image->getClientOriginalName()).'.'.$request->image->extension();
        $request->image->move(public_path('images/uploads'), $path);

        // Create the game
        $game = new Game();
        $game->image_path = 'uploads/'.$path;

        $game->fill($request->all());
        $game->save();

        // Add the genres to the game
        $game->genres()->sync($request->genres);

        return redirect()
            ->route('games.index')
            ->with('success', 'Game created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required',
            'price'        => 'required|gt:0',
            'publisher'    => 'required',
            'developer'    => 'required',
            'release_date' => 'required',
            'age_rating'   => 'required',
            'description'  => 'required',
            'image'        => 'image|max:200|dimensions:width=460,height=215',
        ]);

        $game = Game::findOrFail($id);

        // Store the image whhen new image is uploaded
        if ($request->image) {
            $old_image = public_path('images/'.$game->image_path);
            if (file_exists($old_image)) {
                File::delete($old_image);
            }
            $path = hash('sha1', time().$request->image->getClientOriginalName()).'.'.$request->image->extension();
            $request->image->move(public_path('images/uploads'), $path);
            $game->image_path = 'uploads/'.$path;
        }

        $game->fill($request->all());
        $game->save();

        // Sync the genres to the game
        $game->genres()->sync($request->genres);

        return redirect()
            ->route('games.index')
            ->with('success', 'Game created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $image_path = public_path('images/'.$game->image_path);
        if (file_exists($image_path)) {
            File::delete($image_path);
        }
        $game->delete();

        return redirect()
            ->route('games.index')
            ->with('success', 'Game deleted successfully');
    }
}
