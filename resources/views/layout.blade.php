<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - NutriCare</title>

    <!-- Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col bg-gradient-to-br from-green-100 via-lime-50 to-emerald-100">

    <!-- Navbar Putih -->
    <nav class="navbar shadow-sm">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <h1 class="text-2xl font-bold tracking-wide flex items-center gap-2 text-green-800">
                <span class="text-3xl">🌿</span> NutriCare
            </h1>
            <ul class="flex gap-6 text-lg"> <li><a href="/menu-sehat" class="nav-link">Menu Sehat</a></li> <li><a href="/food-diary" class="nav-link">Food Diary</a></li>


                <li><a href="/" class="nav-link">Dashboard</a></li>
                <li><a href="/kalkulator-gizi" class="nav-link">Kalkulator Gizi</a></li>
            </ul>
             
        </div>

        <!-- Garis Pemisah Putih -->
        <div class="border-b border-white opacity-50"></div>
    </nav>

    <!-- Konten Halaman -->
    <main class="flex-1 container mx-auto py-16 px-6 md:px-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025 NutriCare – Sahabat Gizi Seimbang</p>
    </footer>

</body>
</html>
