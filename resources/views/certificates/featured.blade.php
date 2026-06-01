<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Featured Achievement</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-black text-white">

<section class="min-h-screen pt-2 pb-24 px-6 md:px-20">

   <!-- Navbar -->
   <nav class="w-full px-8 py-3 border-b border-gray-800 mb-10">
        <div class="flex justify-between items-center">

            <!-- Back Button -->
            <a href="/#certificates"
            class="inline-flex items-center gap-2
                    border border-yellow-400 text-yellow-400
                    px-5 py-2 rounded-full
                    hover:bg-yellow-400 hover:text-black
                    transition duration-300">

                ← Back

            </a>

            <!-- Logo -->
            <a href="/" class="text-3xl font-bold text-yellow-400">
                Kala.
            </a>

        </div>

    </nav>
    
    <!-- Title -->
    <div class="text-center mb-20">

        <h1 class="text-5xl md:text-6xl font-bold text-yellow-400 mb-6">
            Featured Achievement
        </h1>

        <p class="text-gray-400 max-w-2xl mx-auto leading-relaxed">
            Featured certificates and awards representing
            one of the most meaningful achievements
            throughout my writing journey.
        </p>

    </div>

    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

        <!-- Certificate -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">

                <img src="{{ asset('images/certificates/featured/Sertifikat.jpg') }}"
                    alt="Juara 3"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    National Poetry Competition
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Achieved 3rd Place in a National Poetry Competition 
                    organized by Era Media Publisher through the poem 
                    "Rintik yang Menyimpan Luka".
                </p>

                <a href="{{ asset('images/certificates/featured/Sertifikat.jpg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>

        </div>

        <!-- Award Charter -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">

                <img src="{{ asset('images/certificates/featured/Piagam.jpeg') }}"
                    alt="Award Charter"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Award Charter
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Official award charter presented in recognition 
                    of achieving 3rd Place in a National Poetry Competition 
                    organized by Era Media Publisher.
                </p>

                <a href="{{ asset('images/certificates/featured/Piagam.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>

        </div>

    </div>

    <!-- Certificate Archive Button -->
    <div class="text-center mt-16">

        <a href="https://drive.google.com/drive/folders/1GqHoxtjUS04iO8RN-g12aHZeXcKSkipV?usp=sharing"
        target="_blank"
        rel="noopener noreferrer"
        class="inline-flex items-center gap-3
                px-8 py-4
                border border-yellow-400
                text-yellow-400
                rounded-full
                font-semibold
                hover:bg-yellow-400
                hover:text-black
                transition duration-300
                hover:shadow-[0_0_20px_rgba(255,215,0,0.45)]">

                View Complete Certificate Collection

        </a>

        <p class="text-gray-500 text-sm mt-4">
            Explore the complete archive of certificates, training records,
            webinars, workshops, writing achievements, and academic accomplishments.
        </p>

    </div>

</section>

</body>
</html>