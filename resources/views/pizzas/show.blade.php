<x-layout>
    <div class="pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p><strong>Type:</strong> {{ $pizza->type }}</p>
        <p><strong>Base:</strong> {{ $pizza->base }}</p>
        <p><strong>Extra Toppings:</strong></p>
        <ul>
            @foreach($toppings as $topping)
                <li>{{ $topping->name }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{$pizza->id}}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="btn-complete">Complete Order</button>
        </form>
    </div>
    <a href="/pizzas" class="back-link"><- Back to all pizzas</a>
</x-layout>