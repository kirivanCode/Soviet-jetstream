<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Control - Soviet Anime Tech') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Modo Soviético -->
            <div class="bg-red-100 p-6 rounded-lg shadow-lg text-center">
                <h3 class="text-2xl font-bold mb-4">Modo Soviético</h3>
                <p class="mb-4">Activa este modo para revolucionar tu experiencia tecnológica.</p>
                <button class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 focus:outline-none">
                    ¡Activar!
                </button>
                <p class="mt-4 text-xl" id="soviet-count">0 revoluciones realizadas.</p>
            </div>

            <!-- Lista de Tareas de un Hacker Otaku -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Lista de Tareas de un Hacker Otaku</h3>
                <ul class="list-disc pl-5">
                    <li>Hackear el sistema del Kremlin usando un portátil de Neon Genesis Evangelion</li>
                    <li>Reconfigurar la inteligencia artificial de tu waifu robótica</li>
                    <li>Crear un algoritmo para encontrar los capítulos perdidos de un anime prohibido en la URSS</li>
                    <li>Organizar un torneo clandestino de Tetris con servidores de la KGB</li>
                </ul>
            </div>

            <!-- Preferencias de Anime y Tecnología Soviética -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">Preferencias: Anime vs. Tecnología Soviética</h3>
                <div class="flex justify-center">
                    <img src="https://4kwallpapers.com/images/wallpapers/anime-girl-3840x2160-10029.jpg" alt="Gráfico de Preferencias" class="w-48 h-48">
                </div>
                <p class="mt-4 text-center">Anime: 70%, Tecnología Soviética: 30%</p>
            </div>

            <!-- Generador de Frases Aleatorias de la URSS y Anime -->
            <div class="bg-purple-100 p-6 rounded-lg shadow-lg text-center">
                <h3 class="text-2xl font-bold mb-4">Generador de Frases Aleatorias</h3>
                <p class="mb-4">Pulsa el botón para obtener una frase épica.</p>
                <button class="bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700 focus:outline-none">
                    Generar Frase
                </button>
                <p class="mt-4 text-xl" id="random-phrase">"La URSS nunca se rindió... y tampoco lo hará tu mecha."</p>
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
