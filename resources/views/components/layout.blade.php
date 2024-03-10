<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <a href="{{ url('/') }}">
            <img src="\images\flamepizzalogo.png" class="smalllogo" alt="Flame Pizza Logo">
        </a>
        </div>
        <nav class=right>
            <div class="homemenu">
            <a  href="{{ url('/') }}">Home</a>
            <a  href="{{ url('/pizzas/menu') }}" >Menu</a>
            </div>
                    <div class="auth-links">
            @if (Route::has('login'))
                <div class="auth">
                    @auth
                        <!-- User is logged in -->
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="logout-btn">Logout</button>
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
        </nav>
    </header>
{{$slot}}

</body>

<section class="spacer">
    <img src="/images/flamepizzalogo.png" alt="" class="smalllogo">
</section>

<footer class="footer">
    <div class="content">
        <div class="footer-content">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>123 Main St, City</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@dragonfirepizza.com</p>
            </div>
            <div class="social-icons">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Order Online</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 Dragon Fire Pizza. All rights reserved.</p>
        </div>
    </div>
</footer>
</html>