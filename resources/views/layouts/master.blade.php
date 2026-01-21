<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 0; display: flex; flex-direction: column; min-height: 100vh; }
        header { background: #2d3436; color: white; padding: 20px; text-align: center; }
        nav a { color: #dfe6e9; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover, .active { color: #00cec9; text-decoration: underline; }
        main { flex: 1; padding: 40px; max-width: 900px; margin: auto; }
        footer { background: #2d3436; color: white; text-align: center; padding: 15px; }
        .card { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 8px; }
    </style>
</head>
<body>

<header>
    <h1>NGUYỄN VĂN A - PORTFOLIO</h1>
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Dự án</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2024 Portfolio Cá Nhân - Bài tập Laravel</p>
</footer>

</body>
</html>