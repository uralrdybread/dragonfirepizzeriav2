<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topping; 

class ToppingController extends Controller
{
    // Method to display a list of toppings
    public function index()
    {
        $toppings = Topping::all();
        return view('toppings.index', compact('toppings'));
    }

    // Method to show the form for creating a new topping
    public function create()
    {
        return view('pizzas.create');
    }

    // Method to store a newly created topping in the database
    public function store(Request $request)
    {
        // Validate request data

        $topping = new Topping();
        $topping->name = $request->input('name');
        // Add more attributes as needed
        $topping->save();

        // Redirect to a success page or back to the form
    }

    // Method to show the form for editing a topping
    public function edit($id)
    {
        $topping = Topping::findOrFail($id);
        return view('toppings.edit', compact('topping'));
    }

    // Method to update the specified topping in the database
    public function update(Request $request, $id)
    {
        // Validate request data

        $topping = Topping::findOrFail($id);
        $topping->name = $request->input('name');
        // Update other attributes as needed
        $topping->save();

        // Redirect to a success page or back to the form
    }

    // Method to remove the specified topping from the database
    public function destroy($id)
    {
        $topping = Topping::findOrFail($id);
        $topping->delete();

        // Redirect to a success page or back to the list of toppings
    }
}