<x-layout>

<div>
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="vegsupreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type</label>
        <select name="base" id="base">
            <option value="cheesycrust">cheesycrust</option>
            <option value="garliccrust">garliccrust</option>
            <option value="thin">thin</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>

</x-layout>