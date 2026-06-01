<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Sales Dashboard</title>

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
            COFFEE SALES ANALYTICS 
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-400 text-lg max-w-3xl leading-relaxed mb-12">
            Dashboard analisis penjualan kopi ini dibuat menggunakan Tableau 
            untuk memvisualisasikan data penjualan secara interaktif dan informatif. 
            Dashboard menampilkan berbagai insight seperti jenis kopi terlaris, 
            tren penjualan bulanan, distribusi penjualan berdasarkan waktu, 
            serta performa penjualan harian untuk membantu proses analisis bisnis.
        </p>

        <!-- Image -->
<div class="rounded-3xl overflow-hidden border border-yellow-500 shadow-[0_0_25px_rgba(234,179,8,0.25)] mb-14 bg-[#111111] p-6">

    <img 
        src="/images/coffee.png"
        alt="Coffee Dashboard"
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

                    <li>✔ Sales by Coffee Type</li>
                    <li>✔ Monthly Sales Trend</li>
                    <li>✔ Sales by Hour of Day</li>
                    <li>✔ Sales Distribution Analysis</li>
                    <li>✔ Interactive Tableau Dashboard</li>
                    <li>✔ Business Data Visualization</li>

                </ul>

            </div>

            <!-- Tools -->
            <div class="bg-[#111111] border border-yellow-400/10 rounded-3xl p-8">

                <h2 class="text-2xl font-semibold text-yellow-400 mb-6">
                    Tools & Technologies
                </h2>

                <div class="flex flex-wrap gap-4">

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Tableau
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Data Visualization
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Dashboard
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Analytics
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Business Intelligence
                    </span>

                    <span class="px-4 py-2 bg-yellow-400 text-black rounded-full font-medium">
                        Data Analysis
                    </span>

                </div>

            </div>

        </div>

    </section>

</body>
</html>