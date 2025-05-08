<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Lara-blog</title>
</head>
<body>
    <header>
        <nav>
            <h1><a href="{{ route('home') }}">Lara-blog</a></h1>
            
            <ul id="nav_links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('category.show', 'lifestyle') }}">Lifestyle</a></li>
                <li><a href="{{ route('category.show', 'music') }}">Music</a></li>
                <li><a href="{{ route('category.show', 'travel') }}">Travel</a></li>
                <li><a href="{{ route('category.show', 'tech') }}">Tech</a></li>
            </ul>
    
            <ul id="nav_links_2">
                @guest
                    <li class="login"><a href="{{ route('login.form') }}">Login</a></li>
                    <li><a href="{{ route('register.form') }}">Sign Up</a></li>
                @endguest
    
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" style="background: none; border: none; padding: 0; font: inherit; cursor: pointer;">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 Lara-blog. All rights reserved.</p>
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
        </ul>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
