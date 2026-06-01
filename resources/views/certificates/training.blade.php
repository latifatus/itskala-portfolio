<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Certificates | Kala Portfolio</title>

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
    <div class="text-center mb-16">

        <h1 class="text-5xl md:text-6xl font-bold text-yellow-400 mb-6">
            Training & Workshop
        </h1>

        <p class="text-gray-400 text-lg max-w-3xl mx-auto leading-relaxed">
            A collection of workshops, training programs, bootcamps, 
            and digital skill development certificates earned throughout my academic journey.
        </p>

    </div>

    

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="group bg-[#111111] border border-yellow-400/20 rounded-3xl overflow-hidden
                    hover:shadow-[0_0_25px_rgba(255,215,0,0.35)]
                    transition duration-500 hover:-translate-y-2">

            <div class="overflow-hidden">

                <img src="{{ asset('images/certificates/training/WebGis.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Interactive WebGIS Workshop
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Completed a hands-on workshop on WebGIS, learning 
                    to create interactive digital maps and visualize 
                    geographic data using web-based mapping technologies.
                </p>

                <a href="{{ asset('images/certificates/training/WebGis.jpeg') }}"
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

                <img src="{{ asset('images/certificates/training/Workshop.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Journalism & Creative Writing Workshop
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Participated in a journalism and creative writing 
                    workshop covering storytelling, news writing, scientific 
                    writing, and graphic design fundamentals.
                </p>

                <a href="{{ asset('images/certificates/training/Workshop.jpeg') }}"
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

                <img src="{{ asset('images/certificates/training/Product.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Product-Led Growth Fundamental
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Completed a short class on Product-Led Growth, 
                    exploring customer-focused product strategies, 
                    user acquisition, retention, and business growth fundamentals.
                </p>

                <a href="{{ asset('images/certificates/training/Product.jpeg') }}"
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

                <img src="{{ asset('images/certificates/training/Design.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Design System in UI Design
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Completed a MySkill Short Class on UI/UX Design, 
                    focusing on design systems, consistency, component 
                    libraries, and scalable user interface development.
                </p>

                <a href="{{ asset('images/certificates/training/Design.jpeg') }}"
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

                <img src="{{ asset('images/certificates/training/Wireframing.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    Wireframing in UI/UX Design
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Completed a MySkill Short Class on UI/UX Design, 
                    learning wireframing techniques for planning user flows, 
                    layouts, and digital product interfaces.
                </p>

                <a href="{{ asset('images/certificates/training/Wireframing.jpeg') }}"
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

                <img src="{{ asset('images/certificates/training/CSS.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    CSS Introduction
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Completed a MySkill Short Class covering CSS fundamentals, 
                    including styling, layouts, typography, colors, and responsive web design basics.
                </p>

                <a href="{{ asset('images/certificates/training/CSS.jpeg') }}"
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

                <img src="{{ asset('images/certificates/training/Vlookup.jpeg') }}"
                    alt="Training Certificate"
                    class="w-full h-72 object-cover
                    group-hover:scale-105 transition duration-500">

            </div>

            <div class="p-6">

                <h3 class="text-2xl font-bold text-white mb-3">
                    VLOOKUP & HLOOKUP
                </h3>

                <p class="text-gray-400 leading-relaxed mb-6">
                    Completed a MySkill Short Class focused on Microsoft Excel lookup functions, 
                    utilizing VLOOKUP and HLOOKUP for efficient data management and analysis.
                </p>

                <a href="{{ asset('images/certificates/training/Vlookup.jpeg') }}"
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

        <a href="https://drive.google.com/drive/folders/1V_pKp8MixCrLCVmRLhFAzg02eNoxBoMs?usp=sharing"
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