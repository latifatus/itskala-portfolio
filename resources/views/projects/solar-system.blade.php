<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solar System Animation</title>

    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white font-[Poppins]">

    <!-- Container -->
    <section class="min-h-screen px-6 md:px-20 py-16">

        <!-- Back Button -->
        <a href="/projects"
        class="inline-block mb-10 px-5 py-2 border border-yellow-400 text-yellow-400 rounded-full hover:bg-yellow-400 hover:text-black transition duration-300">
            ← Back
        </a>

        <!-- Title -->
        <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 mb-6">
            SOLAR SYSTEM ANIMATION
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-400 text-lg max-w-3xl leading-relaxed mb-12">
            Animasi tata surya ini dibuat menggunakan Delphi 12 dengan konsep
            visualisasi orbit planet yang bergerak mengelilingi matahari.
            Project ini menampilkan simulasi sederhana sistem tata surya
            menggunakan objek grafis, timer animation, dan pemrograman visual
            berbasis desktop GUI.
        </p>

        <!-- Image -->
        <div class="rounded-3xl overflow-hidden border border-yellow-500 shadow-[0_0_25px_rgba(234,179,8,0.25)] mb-14 bg-[#111111] p-6">

            <img 
                src="/images/solar.png"
                alt="Solar System Animation"
                class="mx-auto rounded-2xl w-full max-w-4xl object-contain hover:scale-105 transition duration-500"
            >

        </div>

        <!-- Info Grid -->
        <div class="grid md:grid-cols-2 gap-10">

            <!-- Features -->
            <div class="bg-[#111111] border border-yellow-400/10 rounded-3xl p-8">

                <h2 class="text-2xl font-semibold text-yellow-400 mb-6">
                    Features
                </h2>

                <ul class="space-y-4 text-gray-300">

                    <li>✔ Solar System Visualization</li>
                    <li>✔ Planet Orbit Animation</li>
                    <li>✔ Interactive Start Button</li>
                    <li>✔ GUI Desktop Application</li>
                    <li>✔ Real-time Motion Animation</li>
                    <li>✔ Planetary Rotation Simulation</li>
                    <li>✔ Timer-based Animation Logic</li>
                    <li>✔ Delphi Graphic Components</li>

                </ul>

            </div>

            <!-- Tech Stack -->
            <div class="bg-[#111111] border border-yellow-400/10 rounded-3xl p-8">

                <h2 class="text-2xl font-semibold text-yellow-400 mb-6">
                    Tech Stack
                </h2>

                <div class="flex flex-wrap gap-4">

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Delphi 12
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Object Pascal
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        GUI Desktop
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Animation
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Timer Component
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Graphics
                    </span>

                </div>

            </div>

        </div>

    </section>

</body>
</html>