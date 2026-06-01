<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPEG System</title>

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
            SIMPEG SYSTEM
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-400 text-lg max-w-2xl mb-12">
            Sistem informasi kepegawaian merupakan sistem yang dirancang untuk 
            mengelola data dan informasi terkait sumber daya manusia dalam suatu organisasi 
            atau institusi. Sistem ini dirancang dengan menggunakan framework Laravel, yang 
            mendukung pengembangan aplikasi berbasis web secara modular, cepat, dan aman. 
            Dengan sistem ini, pegawai dapat melakukan proses cuti, lembur, dan melihat 
            pengumuman secara online, sementara admin dapat mengelola seluruh data dengan 
            lebih terstruktur dan terintegrasi.
        </p>

       <!-- Image -->
        <div class="rounded-3xl overflow-hidden border border-yellow-500 shadow-[0_0_25px_rgba(234,179,8,0.25)] mb-14 bg-[#111111] p-6">

            <img 
                src="/images/simpeg.png"
                alt="SIMPEG System"
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
                    <li>✔ CRUD Data Pegawai</li>
                    <li>✔ Sistem Penggajian</li>
                    <li>✔ Login Authentication</li>
                    <li>✔ Upload Foto Pegawai</li>
                    <li>✔ Dashboard Admin</li>
                    <li>✔ Dashboard User</li>
                    <li>✔ Data Golongan</li>
                    <li>✔ Dashboard Admin</li>
                    <li>✔ Dashboard User</li>
                    <li>✔ Data Golongan</li>
                </ul>
            </div>

            <!-- Tech Stack -->
            <div class="bg-[#111111] border border-yellow-400/10 rounded-3xl p-8">
                <h2 class="text-2xl font-semibold text-yellow-400 mb-6">
                    Tech Stack
                </h2>

                <div class="flex flex-wrap gap-4">

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Laravel
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Tailwind
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        MySQL
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        PHP
                    </span>
                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        CSS
                    </span>
                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Java Script
                    </span>

                </div>
            </div>

        </div>

    </section>

</body>
</html>