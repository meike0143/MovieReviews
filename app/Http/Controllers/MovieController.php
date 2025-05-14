<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     *  Display a list of Movie
     */
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::all()
        ]);
    }

    /**
     *  Show the form for creating a new Movie
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     *  Store a new Movie in the database
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'year_of_release' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);
        // Create a new Movie model object
        $journey = Movie::create($validated);
        // Redirect to the movies index page
        return redirect()->route('movies.index');
    }

    /**
     *  Show the details of the specified Movie
     */
    public function show(Movie $movie)
    {
        return view('movies.show', [
            'movie' => $movie
        ]);
    }

    /**
     *  Show the form for editing the specified Movie
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', [
            'movie' => $movie
        ]);
    }

    /**
     *  Update the specified Movie in the database
     */
    public function update(Request $request, Movie $movie)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'year_of_release' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);

        $movie->update($validated);
        // Redirect to the movies show page
        return redirect()->route('movies.show', $movie);
    }

    /**
     *  Display a confirmation screen for deleting the specified Movie
     */
    public function delete(Movie $movie)
    {
        return view('movies.delete', [
            'movie' => $movie
        ]);
    }

    /**
     *  Remove the specified Journey from the database
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        // Redirect to the movies index page
        return redirect()->route('movie.index')
            ->with('success', 'Movie successfully deleted');
    }
}
