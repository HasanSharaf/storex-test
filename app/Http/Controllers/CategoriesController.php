<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::latest()->paginate(10);
        return $category;
    }

    public function create(Request $request)
    {
        $category = new Category($request->all());
        $category->save();
        return $category;
        return response()->json(
            [
                'data' => $category,
                'message' => 'Category created successfully',
                'status' => 201
            ],
            201
        );
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();

        return response()->json(
            [
                'data' => $category,
                'message' => 'Category updated successfully',
                'status' => 200
            ],
            200
        );;
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json(
            [
                'data' => null,
                'message' => 'Category deleted successfully',
                'status' => 200
            ],
            200
        );
    }
}
