<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    // Get all Users
    public function index()
    {
        $user = User::OrderBy('id')->paginate(10);
        return $user;
    }

    // Update a User
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->birthday = $request->birthday;
        $user->save();

        return response()->json(
            [
                'data' => null,
                'message' => 'User updated successfully',
                'status' => 200
            ],
            200
        );;
    }

    // Delete a User
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json(
            [
                'data' => null,
                'message' => 'User deleted successfully',
                'status' => 200
            ],
            200
        );
    }
}
