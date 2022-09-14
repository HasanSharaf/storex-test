<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\Movie;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{

    // Get all movies
    public function index(Request $request)
    {

        $movie = Movie::where('id', '>', 0);
        if ($request->name) {
            $movie = $movie->where('title', $request->name);
        }
        if ($request->category) {
            $movie = $movie->where('category_id', $request->category);
        }

        if ($request->rate) {
            $movie = $movie->where('rate', $request->rate);
        }
        
        $movie = $movie->orderBy('id')->paginate(15);
        return $movie;
    }

    // Create a new movie
    public function create(Request $request)
    {
        $movie = new Movie($request->all());
        $movie->save();
        return $movie;
        return response()->json(
            [
                'data' => null,
                'message' => 'Movie created successfully',
                'status' => 201
            ],
            201
        );
    }

    // Update a movie with id
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->save();

        return response()->json(
            [
                'data' => null,
                'message' => 'Movie updated successfully',
                'status' => 200
            ],
            200
        );;
    }

    // Delete a movie
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return response()->json(
            [
                'data' => null,
                'message' => 'Movie deleted successfully',
                'status' => 200
            ],
            200
        );
    }
}
