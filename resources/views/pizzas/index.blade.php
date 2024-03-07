<x-layout>

@foreach ($pizzas as $pizza)

<div>
    {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
</div>
<h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>

@endforeach

</x-layout>