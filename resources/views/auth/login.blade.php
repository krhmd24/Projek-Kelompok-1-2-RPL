<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - NutriCare</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-green-700 text-center mb-6">Login Admin NutriCare</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-semibold text-green-700 mb-1">Email</label>
                <input type="email" name="email" required
                       class="w-full border border-green-300 rounded-lg p-3"
                       placeholder="admin@nutricare.com">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-green-700 mb-1">Password</label>
                <input type="password" name="password" required
                       class="w-full border border-green-300 rounded-lg p-3"
                       placeholder="••••••••">
            </div>

            <button type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                Masuk
            </button>
        </form>
    </div>
</body>
</html>
