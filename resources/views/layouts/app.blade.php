<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Новостной портал')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="header">
        <a class="logo" href="{{ url('/') }}">Новости IT</a>
        <nav>
            <a href="{{ url('/') }}">Главная</a>
            <a href="{{ url('/category') }}">Категория (Наука)</a>
            <a href="{{ url('/journalist') }}">Журналист</a>
            <a href="{{ url('/admin') }}">Админ</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div><h3>Контакты</h3><p>Email: news@example.com</p></div>
        <div><h3>О проекте</h3><p>Учебный новостной портал</p></div>
        <div><h3>Технологии</h3><p>HTML, CSS, Laravel</p></div>
        <p class="copyright">© 2026 Новостной портал</p>
    </footer>
</body>
</html>