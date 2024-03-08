<x-layout>
    <div>
        <h1>All Toppings</h1>
        <ul>
            @foreach($toppings as $topping)
                <li>{{ $topping->name }}</li>
            @endforeach
        </ul>
    </div>
</x-layout>