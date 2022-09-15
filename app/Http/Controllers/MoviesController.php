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

    // Movies Filter
    public function filter(Request $request)
    {
        $movie = Movie::query();
        if ($request->name) {
            $movie = $movie->where('title', $request->name);
        }
        if ($request->category) {
            $movie = $movie->where('category_id', $request->category);
        }

        if ($request->rate) {
            $movie = $movie->where('rate', $request->rate);
        }
        return $movie;
    }

    // Get all movies
    public function index(Request $request, Movie $movie, $data)
    {
        $movieQuery = $this->filter($request);
        $movie = $movieQuery->orderBy('id')->paginate(10);
        return $movie->all();
    }

    // Create a new movie
    public function create(Request $request)
    {
        $movie = new Movie($request->all());
        if ($file = $request->file('image')) {
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $path = $file->move(public_path('public/files'), $filename);
            $movie->image = $path;
            $movie->save();
        }
        $movie->save();

        return response()->json(
            [
                'data' => $movie,
                'message' => 'Movie created successfully',
                'status' => 201
            ],
            201
        );
    }

    // Update a movie with id
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id)->update($request->all());

        return response()->json(
            [
                'data' => $movie,
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
