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
                    <option value="margherita">Margherita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="vegsupreme">Veg Supreme</option>
                    <option value="volcano">Volcano</option>
                </select>
            </div>
            <div class="form-group">
                <label for="base">Choose base type:</label>
                <select name="base" id="base">
                    <option value="cheesycrust">Cheesy Crust</option>
                    <option value="garliccrust">Garlic Crust</option>
                    <option value="thin">Thin Crust</option>
                    <option value="thick">Thick Crust</option>
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