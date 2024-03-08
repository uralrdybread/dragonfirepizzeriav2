<x-layout>
    <div>
        <h1>Order for {{ $pizza->name }}</h1>
        <p>Type - {{ $pizza->type }}</p>
        <p>Base - {{ $pizza->base }}</p>
        <p>Extra Toppings:</p>
        <ul>
            @foreach($toppings as $topping)
                <li>{{ $topping->name }}</li>
            @endforeach

        </ul>
        <form action="/pizzas/{{$pizza->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>
    <a href="/pizzas"><- Back to all pizzas</a>
</x-layout>
