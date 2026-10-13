<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portal Akademik')</title>
</head>
<body>
    {{-- Navbar (Opsional, pastikan partials/navbar.blade.php juga dibuat jika dipakai) --}}
    @include('partials.navbar')

    <main style="padding: 20px;">
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Laravel</p>
    </footer>
</body>
</html>