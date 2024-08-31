<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anime World</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="min-h-screen bg-gray-100">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10 bg-gray-800 shadow-md">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-300 hover:text-white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-300 hover:text-white">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-300 hover:text-white">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Hero -->
        <section class="relative bg-cover bg-center h-96" style="background-image: url('https://www.wallpaperuse.com/wallp/66-661809_m.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h2 class="text-5xl font-bold text-white">Bienvenido a La página web Personal</h2>
            </div>
        </section>

        <!-- Anime Destacados -->
        <section class="container mx-auto py-12">
            <h2 class="text-4xl font-bold mb-8 text-yellow-400">Cositas destacadas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Tarjetas -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <img src="https://konosuba.store/wp-content/uploads/2021/11/megumin.jpg" alt="Megumin" class="rounded-t-lg w-full h-48 object-cover">
                    <h3 class="text-2xl font-bold mt-4">Megumin</h3>
                    <p class="mt-2">Explota</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <img src="https://i.ytimg.com/vi/Rs0DhT1eiQM/maxresdefault.jpg" alt="Soviet" class="rounded-t-lg w-full h-48 object-cover">
                    <h3 class="text-2xl font-bold mt-4">Soviet</h3>
                    <p class="mt-2">La Paz nunca fue la opción</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <img src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2019/11/Anime-Funny-Deku.jpg" alt="Hijo de P%$#" class="rounded-t-lg w-full h-48 object-cover">
                    <h3 class="text-2xl font-bold mt-4">Hijo de P%$#</h3>
                    <p class="mt-2">La vida es estupenda cuando no despiertas de tu sueño</p>
                </div>
            </div>
        </section>

        <!-- Pie de página -->
        <footer class="bg-gray-800 p-6 mt-12">
            <div class="container mx-auto text-center text-gray-300">
                <p>&copy; 2024 Memes para todos. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</body>
</html>
