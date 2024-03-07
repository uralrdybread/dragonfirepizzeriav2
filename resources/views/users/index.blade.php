<x-layout>

@section('content')
    <h1>Users with Role: {{ $role }}</h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection

</x-layout>