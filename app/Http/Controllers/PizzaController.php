<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Topping;

class PizzaController extends Controller
{
    public function index() {

        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
        {
    $pizza = Pizza::findOrFail($id);
    $toppings = $pizza->toppings()->get(); // Retrieve the toppings associated with the pizza

    return view('pizzas.show', compact('pizza', 'toppings'));
        }

    public function create()
    {
    $toppings = Topping::all();
    return view('pizzas.create', compact('toppings'));
    }

    public function store(Request $request) {
    $pizza = new Pizza();
    $pizza->name = $request->input('name');
    $pizza->type = $request->input('type');
    $pizza->base = $request->input('base');
    $pizza->save();

    $toppingIds = $request->input('toppings', []);
    $pizza->toppings()->attach($toppingIds);

    return redirect('/')->with('mssg', 'Thanks for your order!');
}

    public function destroy($id) {
        $pizza = Pizza::findorFail($id);

        $pizza->delete();

        return redirect('/pizzas');
    }

    public function menu()
    {
        return view('pizzas.menu');
    }
}
