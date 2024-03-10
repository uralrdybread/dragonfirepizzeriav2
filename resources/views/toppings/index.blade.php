<x-layout>
    <div class="topping-container">
        <!-- Add Topping Form -->
        <div class="add-topping">
            <h2>Add Topping</h2>
            <form action="{{ route('toppings.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Topping Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <button type="submit">Add Topping</button>
            </form>
        </div>

        <!-- List of Toppings with Delete Button -->
        <div class="topping-list">
            <h2>Topping List</h2>
            @if ($toppings->isEmpty())
                <p>No toppings available.</p>
            @else
                <ul>
                    @foreach ($toppings as $topping)
                        <li>{{ $topping->name }} 
                            <form action="{{ route('toppings.destroy', $topping->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</x-layout>