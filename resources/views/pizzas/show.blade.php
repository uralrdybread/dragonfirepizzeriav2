<x-layout>

<div>
    <h1>Order for {{ $pizza->name }}</h1>
    <p> type - {{ $pizza->type }}</p>
    <p> base - {{ $pizza->base }}</p>
    <p>Extra Toppings</p>
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
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