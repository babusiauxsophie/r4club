<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->input('search');

        $query = User::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('firstname', 'like', '%' . $search . '%')
                    ->orWhere('lastname', 'like', '%' . $search . '%')
                    ->orWhere('username', 'like', '%' . $search . '%');
            });
        }

        $users = $query->SimplePaginate(10);

        return view('users.list', [
            'users' => $users,
            'search' => $search,
        ]);
    }

    public function detail($id)
    {
        $user = User::findOrFail($id);

        return view('users.detail', [
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        if (Auth::id() !== $user->id) {
            abort(403);
        }

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if (Auth::id() !== $user->id) {
            abort(403);
        }

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('users.detail', ['id' => $user->id])
            ->with('success', 'Profile updated successfully.');
    }
}
