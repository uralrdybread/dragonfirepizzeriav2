<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                {{ __("You're logged in!") }}
                @auth
                    @if(auth()->user()->role === 'admin')
                        <div class="mt-6">
                            <p class="text-center"><a href="/pizzas" class="text-blue-500 hover:text-blue-700">View All Pizza Orders</a></p>
                            <p class="text-center"><a href="/toppings" class="text-blue-500 hover:text-blue-700">Add or Remove Seasonal Toppings</a></p>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>