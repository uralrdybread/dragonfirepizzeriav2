<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<nav>
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}">Your Site Name</a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/pizzas') }}">Pizzas</a></li>
            <!-- Add more nav links as needed -->
        </ul>
        <div class="auth-links">
            @if (Route::has('login'))
                <div class="auth">
                    @auth
                        <!-- User is logged in -->
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    @else
                        <!-- User is not logged in -->
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
<body>
    
{{$slot}}

</body>
</html>