<x-layout>

<div class="pizza-container">

@foreach ($pizzas as $pizza)

<div class="pizza-card">
    <h2>{{ $pizza->name }}</h2>
    <p><strong>Type:</strong> {{ $pizza->type }}</p>
    <p><strong>Base:</strong> {{ $pizza->base }}</p>
    <p><a href="/pizzas/{{ $pizza->id }}">Details</a></p>
</div>

@endforeach

</div>

</x-layout>