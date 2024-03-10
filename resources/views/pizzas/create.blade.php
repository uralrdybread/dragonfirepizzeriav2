<x-layout>

    <div class="form-container">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST" class="pizza-form">
            @csrf
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="type">Choose pizza type:</label>
                <select name="type" id="type">
                    <option value="Wizard's Garden">Wizard's Garden</option>
                    <option value="Dragon's Blaze">Dragon's Blaze</option>
                    <option value="Dragon's Delight">Dragon's Delight</option>
                    <option value="Classic Margherita">Classic Margherita</option>
                    <option value="Cheese Lover's Dream">Cheese Lover's Dream</option>
                    <option value="Hawaiian Retreat">Hawaiian Retreat</option>
                    <option value="Knight's Feast">Knight's Feast</option>
                </select>
            </div>
            <div class="form-group">
                <label for="base">Choose base type:</label>
                <select name="base" id="base">
                    <option value="Hand Tossed Traditional">Hand Tossed Traditional</option>
                    <option value="New York Thin">New York Thin</option>
                    <option value="Detroit Pan">Detroit Pan</option>
                    <option value="Neapolitan">Neapolitan</option>
                </select>
            </div>
            <div class="form-group toppings">
                <fieldset>
                    <legend>Extra Toppings:</legend>
                    @foreach($toppings as $topping)
                        <input type="checkbox" name="toppings[]" id="{{ $topping->id }}" value="{{ $topping->id }}">
                        <label for="{{ $topping->id }}">{{ $topping->name }}</label>
                    @endforeach
                </fieldset>
            </div>
            <div class="form-group">
                <input type="submit" value="Order Pizza" class="btn-submit">
            </div>
        </form>
    </div>

</x-layout>