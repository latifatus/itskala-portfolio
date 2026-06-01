<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Certificates | Kala Portfolio</title>

    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>

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
    <div class="text-center mt-10 mb-16">

        <h1 class="text-5xl md:text-6xl font-bold text-yellow-400 mb-6">
            Writing Certificates
        </h1>

        <p class="text-gray-400 max-w-2xl mx-auto leading-relaxed">
           A collection of literary achievements, poetry, short stories, quotes, 
           and letters, including anthology publications, selected writer recognitions, 
           and national writing certificates throughout my creative writing journey.
        </p>

    </div>

    

    <!-- Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/EMN.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Elegi di Ujung Atma
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected participant in a national poetry competition organized 
                    by Event Menulis nasional with the poem "Elegi di Ujung Atma".
                </p>

                <a href="{{ asset('images/certificates/writing/EMN.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 2 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Halo Penulis.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Ketika Hati Menanti yang Pasti
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected literary work in a national writing competition organized 
                    by Detak Pustaka and Halo Penulis with the piece "Ketika Hati Menanti yang Pasti".
                </p>

                <a href="{{ asset('images/certificates/writing/Halo Penulis.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 3 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/NQ Surat1.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Dari Hati untuk Diri
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected literary work in a national writing competition organized 
                    by Detak Pustaka and Nulis Quotes with the piece "Dari Hati untuk Diri".
                </p>

                <a href="{{ asset('images/certificates/writing/NQ Surat1.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 4 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/NQ Surat2.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Surat Dari Hati Untuk Ibu
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected literary work in a national writing competition organized 
                    by Detak Pustaka and Nulis Quotes with the piece "Surat Dari Hati Untuk Ibu".
                </p>

                <a href="{{ asset('images/certificates/writing/NQ Surat2.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 5 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/NQ Surat3.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Saat Luka Jadi Kata
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected literary work in a national writing competition organized 
                    by Detak Pustaka and Nulis Quotes with the piece "Saat Luka Jadi Kata".
                </p>

                <a href="{{ asset('images/certificates/writing/NQ Surat3.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

    <!-- CARD 6 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/NQ Surat4.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Teruntuk Ayah, dari Hatiku
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected literary work in a national writing competition organized 
                    by Detak Pustaka and Nulis Quotes with the piece "Teruntuk Ayah, dari Hatiku".
                </p>

                <a href="{{ asset('images/certificates/writing/NQ Surat4.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>


        <!-- CARD 7 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Penulis Pustaka1.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Janji, Bukti, dan Setia
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected writer in a national short story and poetry competition organized 
                    by Penulis Pustaka through the work "Janji, Bukti, dan Setia".
                </p>

                <a href="{{ asset('images/certificates/writing/Penulis Pustaka1.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 8 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Penulis Pustaka2.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Harapan dan Penantian
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected writer in a national short story and poetry competition organized 
                    by Penulis Pustaka through the work "Harapan dan Penantian".
                </p>

                <a href="{{ asset('images/certificates/writing/Penulis Pustaka2.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 9 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Penulis Pustaka3.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Perasaan dan Pilihan
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Selected writer in a national short story and poetry competition organized 
                    by Penulis Pustaka through the work "Perasaan dan Pilihan".
                </p>

                <a href="{{ asset('images/certificates/writing/Penulis Pustaka3.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>

        <!-- CARD 10 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Penulis.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    CINTA
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Recognized as a selected writer in the national poetry 
                    competition anthology "CINTA" organized by CV Simpel Publisher.
                </p>

                <a href="{{ asset('images/certificates/writing/Penulis.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>


        <!-- CARD 11 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Terbaik 101.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Yang Kupanggil Terakhir
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Awarded as one of the Top 101 selected writers in the national poetry 
                    competition anthology "CINTA" organized by CV Simpel Publisher.
                </p>

                <a href="{{ asset('images/certificates/writing/Terbaik 101.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>


        <!-- CARD 12 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Terbaik 104.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Di Antara Namaku dan Namamu
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Recognized among the Top 104 selected writers in the national poetry 
                    competition anthology "CINTA" organized by CV Simpel Publisher.
                </p>

                <a href="{{ asset('images/certificates/writing/Terbaik 104.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>


        <!-- CARD 13 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Terbaik 121.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Di Doa yang Tak Kembali
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Recognized among the Top 121 selected writers in the national poetry 
                    competition anthology "Di Doa yang Tak Kembali" organized by CV Simpel Publisher.
                </p>

                <a href="{{ asset('images/certificates/writing/Terbaik 121.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>


        <!-- CARD 14 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Terbaik 126.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Ditinggal, Tapi Tak Rapuh
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Recognized among the Top 126 selected writers in the national poetry 
                    competition anthology "Ditinggal, Tapi Tak Rapuh" organized by CV Simpel Publisher.
                </p>

                <a href="{{ asset('images/certificates/writing/Terbaik 126.jpeg') }}"
                target="_blank"
                class="inline-block px-5 py-2 border border-yellow-400
                text-yellow-400 rounded-full
                hover:bg-yellow-400 hover:text-black
                transition duration-300">

                    View Certificate

                </a>

            </div>
        </div>


        <!-- CARD 15 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">
                <img src="{{ asset('images/certificates/writing/Terbaik 136.jpeg') }}"
                    alt="Writing Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">
            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Nyaris Jadi Kita
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Recognized among the Top 136 selected writers in the national poetry 
                    competition anthology "Nyaris Jadi Kita" organized by CV Simpel Publisher.
                </p>

                <a href="{{ asset('images/certificates/writing/Terbaik 136.jpeg') }}"
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

        <a href="https://drive.google.com/drive/folders/1iY0pK3QqcL8u_O0nPK55LA37mTmy4k2h?usp=sharing"
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