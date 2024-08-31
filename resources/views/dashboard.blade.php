<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Control - Soviet Anime Tech') }}
        </h2>
    </x-slot>

    <!-- Menú de Navegación -->
    <div class="bg-white text-gray-800 p-4 mb-6 border-b border-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('dashboard') }}" class="hover:text-gray-600">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="hover:text-gray-600">Formulario de Contacto</a>
                </li>
                <li>
                    <a href="{{ route('calculator') }}" class="hover:text-gray-600">Calculadora</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="p-4">
        @if (session('success'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
        @endif
        
        <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 border-b border-gray-300 pb-2">
                Deje su opinión por la madre Rusia
            </h1>
            <input type="text" name="name" placeholder="Tu nombre" required class="block w-full p-3 mb-4 border border-gray-300 rounded-md bg-gray-100 text-gray-800">
            <input type="email" name="email" placeholder="Tu correo" required class="block w-full p-3 mb-4 border border-gray-300 rounded-md bg-gray-100 text-gray-800">
            <textarea name="message" placeholder="Tu mensaje" required class="block w-full p-3 mb-4 border border-gray-300 rounded-md bg-gray-100 text-gray-800"></textarea>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700">Enviar</button>
        </form>
    </div>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Modo Soviético -->
            <div class="bg-red-100 p-6 rounded-lg shadow-lg text-center border border-red-200">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Modo Soviético</h3>
                <p class="mb-4 text-gray-800">Activa este modo para revolucionar tu experiencia tecnológica.</p>
                <button class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 focus:outline-none">
                    ¡Activar!
                </button>
                <p class="mt-4 text-xl text-gray-800" id="soviet-count">0 revoluciones realizadas.</p>
            </div>

            <!-- Lista de Tareas de un Hacker Otaku -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Lista de Tareas de un Hacker Otaku</h3>
                <ul class="list-disc pl-5 text-gray-800">
                    <li>Hackear el sistema del Kremlin usando un portátil de Neon Genesis Evangelion</li>
                    <li>Reconfigurar la inteligencia artificial de tu waifu robótica</li>
                    <li>Crear un algoritmo para encontrar los capítulos perdidos de un anime prohibido en la URSS</li>
                    <li>Organizar un torneo clandestino de Tetris con servidores de la KGB</li>
                </ul>
            </div>

            <!-- Preferencias de Anime y Tecnología Soviética -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-lg border border-blue-200">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Preferencias: Anime vs. Tecnología Soviética</h3>
                <div class="flex justify-center">
                    <img src="https://4kwallpapers.com/images/wallpapers/anime-girl-3840x2160-10029.jpg" alt="Gráfico de Preferencias" class="w-48 h-48 rounded-lg">
                </div>
                <p class="mt-4 text-center text-gray-800">Anime: 70%, Tecnología Soviética: 30%</p>
            </div>

            <!-- Generador de Frases Aleatorias de la URSS y Anime -->
            <div class="bg-purple-100 p-6 rounded-lg shadow-lg text-center border border-purple-200">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Generador de Frases Aleatorias</h3>
                <p class="mb-4 text-gray-800">Pulsa el botón para obtener una frase épica.</p>
                <button class="bg-purple-600 text-black px-4 py-2 rounded-full hover:bg-purple-700 focus:outline-none">
                    Generar Frase
                </button>
                <p class="mt-4 text-xl text-gray-800" id="random-phrase">"La URSS nunca se rindió... y tampoco lo hará tu mecha."</p>
            </div>
        </div>
    </div>

    <script>
        // Funcionalidad de Modo Soviético
        let sovietCount = 0;
        document.querySelector('.bg-red-600').addEventListener('click', function() {
            sovietCount++;
            document.getElementById('soviet-count').textContent = sovietCount + " revoluciones realizadas.";
        });

        // Generador de Frases Aleatorias
        const phrases = [
            "En la madre Rusia, el anime te mira a ti.",
            "Nunca subestimes el poder de un ordenador soviético con Linux.",
            "Mechas y tanques soviéticos, una combinación imparable.",
            "La URSS nunca se rindió... y tampoco lo hará tu mecha."
        ];

        document.querySelector('.bg-purple-600').addEventListener('click', function() {
            const randomPhrase = phrases[Math.floor(Math.random() * phrases.length)];
            document.getElementById('random-phrase').textContent = randomPhrase;
        });
    </script>
</x-app-layout>
