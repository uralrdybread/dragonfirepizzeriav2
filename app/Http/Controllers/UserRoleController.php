<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    // Method to view users with a specific role
    public function index($role)
    {
        $users = User::where('role', $role)->get();
        return view('users.index', compact('users'));
    }

    // Method to assign a role to a user
    public function assignRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->role = $request->input('role');
        $user->save();
        return redirect()->back()->with('success', 'Role assigned successfully.');
    }
}
