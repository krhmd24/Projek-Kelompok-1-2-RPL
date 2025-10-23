<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Nutricare</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-50 to-white font-[Poppins]">

    <div class="min-h-screen flex flex-col justify-center items-center px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-green-600">Nutricare</h1>
                <p class="text-gray-500 mt-2">Masuk untuk melanjutkan ke akun Anda</p>
            </div>

            <!-- Form Login -->
            <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" required
                        class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi</label>
                    <input type="password" name="password" required
                        class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="flex justify-between items-center">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" class="mr-2 rounded border-gray-300"> Ingat saya
                    </label>
                    <a href="#" class="text-green-600 hover:underline text-sm">Lupa kata sandi?</a>
                </div>

                <button type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded-xl hover:bg-green-700 transition font-semibold">
                    Masuk
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                Belum punya akun?
                <a href="/register" class="text-green-600 font-semibold hover:underline">Daftar Sekarang</a>
            </p>
        </div>

        <p class="text-gray-400 text-xs mt-6">&copy; {{ date('Y') }} Nutricare. Semua Hak Dilindungi.</p>
    </div>

</body>
</html>
