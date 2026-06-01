<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white font-[Poppins]">

    <!-- Navbar -->
<nav class="w-full px-10 py-6 border-b border-gray-800">

    <div class="flex justify-between items-center">

        <!-- Back Button -->
        <a href="/#projects"
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

    <!-- Projects -->
    <section class="min-h-screen px-10 py-20">

        <h1 class="text-5xl font-bold text-yellow-400 mb-16 text-center">
            All Projects
        </h1>

        <div class="grid md:grid-cols-3 gap-10">

            <!-- Project 1 -->
            <a href="/projects/simpeg">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/simpeg.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                            Sistem Informasi Kepegawaian
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Website sistem informasi kepegawaian berbasis Laravel dengan fitur 
                            data pegawai, absensi, cuti dashboard admin dan fitur CRUD lainnya.
                        </p>

                    </div>

                </div>

            </a>

            <!-- Project 2 -->
            <a href="/projects/portfolio">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/porto.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                            Personal Portfolio Website
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Website portfolio pribadi dengan desain modern, responsive, 
                            dan interactive interface untuk menampilkan project, skill, dan karya digital.
                        </p>

                    </div>

                </div>

            </a>

            <!-- Project 3 -->
            <a href="/projects/writing">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/writing.jpeg') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                            Creative Writing Blog
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Kumpulan puisi, cerpen, quotes, dan karya tulis non-akademik yang ditampilkan
                            dalam website modern untuk mendokumentasikan perjalanan menulis dan karya kreatif
                            secara personal dan inspiratif.
                        </p>

                    </div>
                </div>

            </a>


            <!-- Project 4 -->
            <a href="/projects/student-grade">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/student.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                            Student Grade Application
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Aplikasi pengolahan data nilai mahasiswa berbasis Java NetBeans
                            dengan fitur input nilai, perhitungan grade otomatis,
                            dan tampilan data akademik mahasiswa.
                        </p>

                    </div>

                </div>

            </a>

            <!-- Project 5 -->
            <a href="/projects/food-ordering">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/pay.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                            Food Ordering Application
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Aplikasi pemesanan makanan berbasis Java NetBeans yang dibuat
                            untuk membantu proses pemesanan menu makanan secara lebih cepat
                            dan terstruktur.
                        </p>

                    </div>

                </div>

            </a>

            <!-- Project 6 -->
            <a href="/projects/solar-system">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/solar.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-3xl font-semibold mb-3">
                           Solar System Animation
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[110px]">
                             Animasi tata surya menggunakan Delphi 12 yang menampilkan orbit planet,
                            pergerakan objek langit, dan simulasi sistem tata surya secara interaktif.
                        </p>
                        

                    </div>

                </div>

            </a>

            <!-- Project 7 -->
            <a href="/projects/fish-animation">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/fish.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                             Fish Animation Underwater
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Animasi bawah laut ini dibuat menggunakan Delphi 12 dengan konsep
                            simulasi kehidupan laut interaktif.
                        </p>

                    </div>

                </div>

            </a>

            <!-- Project 8 -->
            <a href="/projects/coffee-sales">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/coffee.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-3xl font-semibold mb-3">
                            Coffee Sales Analytics
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Dashboard analisis penjualan kopi menggunakan Tableau dengan visualisasi data,
                            laporan penjualan, tren bisnis, dan insight interaktif untuk mendukung
                            pengambilan keputusan yang lebih efektif.
                        </p>

                    </div>

                </div>

            </a>


            <!-- Project 9 -->
            <a href="/projects/cloud-web-security">

                <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                    <img
                        src="{{ asset('images/cloud.png') }}"
                        class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                    >

                    <div class="p-6">

                        <h3 class="text-2xl font-semibold mb-3">
                            Cloud Web Security Implementation
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-5 min-h-[120px]">
                            Implementation of HTTPS and TLS security protocols on 
                            cloud-based web applications using Netlify and Firebase 
                            to ensure secure communication and data protection.
                        </p>

                    </div>

                </div>

            </a>



        </div>

    </section>

</body>
</html>