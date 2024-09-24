<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function create($userId)
    {
        $user = User::findOrFail($userId);

        return view('cars.create', ['user' => $user]);
    }

    public function store(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $request->validate([
            'brand' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'build_year' => 'required|integer',
            'color' => 'required|string|max:255',
        ]);

        $car = new Car($request->all());
        $car->user_id = $user->id;
        $car->save();

        return redirect()->route('users.detail', ['id' => $user->id])
            ->with('success', 'Car added successfully.');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);

        if (Auth::id() !== $car->user_id) {
            abort(403);  // Unauthorized action
        }

        return view('cars.edit', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        if (Auth::id() !== $car->user_id) {
            abort(403);  // Unauthorized action
        }

        $request->validate([
            'brand' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'build_year' => 'required|integer',
            'color' => 'required|string|max:255',
        ]);

        $car->update($request->all());

        return redirect()->route('users.detail', ['id' => $car->user_id])
            ->with('success', 'Car updated successfully.');
    }

    // Add the show method
    public function detail($id)
    {
        $car = Car::findOrFail($id);

        return view('cars.detail', ['car' => $car]);
    }
}
