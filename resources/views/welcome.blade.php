<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ItsKala | Portfolio</title>

    <meta name="description"
        content="Portfolio Kala - Informatics Engineering Student, Laravel Developer, Web Developer, and Writer.">

    <meta name="keywords"
        content="Kala, Latifatus Zahro, Laravel, Portfolio, Web Developer, Informatics Engineering">

    <meta name="author"
        content="Kala">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    @vite('resources/css/app.css')

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- POPPINS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CINZEL -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Typed JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- TSParticles -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Animation Style -->
    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        .hero-font{
            font-family: 'Cinzel', serif !important;
        }

        .hidden-section{
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        .show{
            opacity: 1;
            transform: translateY(0);
        }

        .nav-link.active{
            color: #facc15;
            border-bottom: 2px solid #facc15;
            padding-bottom: 4px;
        }

        .loader-ring{
            width: 90px;
            height: 90px;
            border: 2px solid rgba(255, 204, 21, 0.2);
            border-top: 2px solid #facc15;
            border-radius: 50%;
            position: relative;
            animation: spin 1.5s linear infinite;
            box-shadow: 0 0 20px rgba(250, 204, 21, 0.3);
        }

        .loader-ring::before{
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 14px;
            height: 14px;
            background: #facc15;
            border-radius: 50%;
            box-shadow: 0 0 15px #facc15;
        }

        @keyframes spin{
            100%{
                transform: rotate(360deg);
            }
        }

        @keyframes loadingLine{
            from{
                width: 0%;
            }

            to{
                width: 100%;
            }
        }

        @keyframes loadingDot{
            from{
                left: 0%;
            }

            to{
                left: 100%;
            }
        }

    </style>

</head>
   
   
<body class="bg-black text-white font-[Poppins] overflow-x-hidden">

   <!-- Loading Screen -->
<div id="loader"
class="fixed inset-0 bg-black z-[9999] flex flex-col items-center justify-center transition duration-700">

    <!-- Logo -->
   <h1 class="hero-font text-4xl md:text-6xl font-bold mb-5 leading-tight tracking-tight text-white">
        Kala.
    </h1>

    <!-- Orbit Loader -->
    <div class="relative w-36 h-36">

        <!-- Outer Circle -->
        <div class="absolute inset-0 border-2 border-yellow-400/20 rounded-full"></div>

        <!-- Rotating Ring -->
        <div class="absolute inset-0 border-t-4 border-yellow-400 rounded-full animate-spin"></div>

       

    </div>

    <!-- Text -->
    <p class="text-gray-500 mt-8 tracking-[3px] text-sm animate-pulse">
        INITIALIZING PORTFOLIO...
    </p>

</div>

    <!-- Scroll Progress Bar -->
    <div id="progress-bar"
        class="fixed top-0 left-0 h-1 bg-yellow-400 z-100 transition-all duration-200"
        style="width: 0%">
    </div>

    <!-- Particle Background -->
    <div id="particles-js" class="fixed inset-0 -z-10">  
    </div>

    <!-- Mouse Glow -->
    <div id="mouse-glow"
        class="fixed w-72 h-72 bg-yellow-400 opacity-10 blur-3xl rounded-full pointer-events-none z-0 transition duration-300">
    </div>

    <!-- Glow Background -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-yellow-400 opacity-20 blur-3xl rounded-full"></div>

    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-500 opacity-10 blur-3xl rounded-full"></div>

    <!-- Navbar -->
   <nav class="fixed top-0 left-0 w-full flex justify-between items-center px-6 md:px-10 py-5 border-b border-gray-800 bg-black/70 backdrop-blur-md z-50">

        <h1 class="font-heading text-2xl font-bold text-yellow-400 tracking-tight">
            Kala.
        </h1>

        <ul class="hidden md:flex gap-6 text-sm">

            <li>
                <a href="#home" class="nav-link hover:text-yellow-400 transition duration-300">
                    Home
                </a>
            </li>

            <li>
                <a href="#about" class="nav-link hover:text-yellow-400 transition duration-300">
                    About
                </a>
            </li>

            <li>
                <a href="#skills" class="nav-link hover:text-yellow-400 transition duration-300">
                    Skills
                </a>
            </li>

            <li>
                <a href="#projects" class="nav-link hover:text-yellow-400 transition duration-300">
                    Projects
                </a>
            </li>

            <li>
            <a href="#certificates" class="nav-link hover:text-yellow-400 transition duration-300">
                    Certificates
                </a>
            </li>

            <li>
                <a href="#contact" class="nav-link hover:text-yellow-400 transition duration-300">
                    Contact
                </a>
            </li>

        </ul>

    <!-- Hamburger Button -->
    <button id="menu-btn" class="md:hidden text-yellow-400 text-3xl">
        ☰
    </button>

    </nav>

        <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed top-0 right-0 h-screen w-64 bg-black/80 backdrop-blur-lg z-40 hidden flex flex-col items-start pt-28 px-8 gap-8 text-xl border-l border-gray-800">

        <a href="#home"
        class="mobile-link text-white hover:text-yellow-400 transition">
            Home
        </a>

        <a href="#about"
        class="mobile-link text-white hover:text-yellow-400 transition">
            About
        </a>

        <a href="#skills"
        class="mobile-link text-white hover:text-yellow-400 transition">
            Skills
        </a>

        <a href="#projects"
        class="mobile-link text-white hover:text-yellow-400 transition">
            Projects
        </a>

        <a href="#certificates"
        class="mobile-link text-white hover:text-yellow-400 transition">
            Certificates
        </a>

        <a href="#contact"
        class="mobile-link text-white hover:text-yellow-400 transition">
            Contact
        </a>

    </div>
    

    <!-- Hero Section -->
    <section id="home" class="hidden-section show min-h-screen flex flex-col justify-center items-center text-center px-5 py-24 relative z-10">
        <h2 class="text-yellow-400 text-lg mb-3 animate-pulse">
            Hello, I'm
        </h2>

        <h1 class="hero-font text-4xl sm:text-5xl md:text-6xl font-bold mb-5 leading-tight tracking-wide text-white">
            Latifatus Zahro
        </h1>

       <!-- Typing Animation -->
        <p class="text-gray-200 text-sm md:text-base mb-6 tracking-wide">
            <span id="typing"></span>
        </p>

        <!-- Quote -->
        <p class="text-yellow-400 italic text-sm md:text-lg mb-10">
            “Every story begins with courage to start.”
        </p>

        <!-- Buttons -->
        <div class="flex flex-col md:flex-row gap-4 justify-center items-center">

            <a href="#projects" class="bg-yellow-400 text-black px-6 py-3 rounded-full font-semibold hover:scale-110 hover:shadow-yellow-400/50 hover:shadow-2xl transition duration-300 inline-block">
            Explore Portfolio
             </a>

            <a href="#contact" class="border border-yellow-400 text-yellow-400 px-6 py-3 rounded-full hover:bg-yellow-400 hover:text-black hover:scale-105 transition duration-300 inline-block">
            Contact Me
            </a>

        </div>

   <div class="mt-10 flex justify-center">

  <div class="border border-yellow-400/40 rounded-3xl px-5 md:px-8 py-4 md:py-5 bg-[#111111]/70 backdrop-blur-md hover:border-yellow-400 hover:shadow-yellow-400/20 hover:shadow-xl transition duration-500 w-full max-w-[440px]">

    <div class="flex justify-between items-center gap-6 relative">

        <!-- Quote -->
    <span class="text-yellow-400 text-3xl self-start -mt-1">
        ❝
    </span>

    <!-- Text -->
    <p class="quote-text text-center text-gray-300 text-sm italic tracking-wide leading-relaxed">
        Live it, enjoy it, and be grateful for it,<br>
        because life is a journey, not a race.
    </p>

    <!-- Right Side -->
    <div class="flex flex-col items-center justify-between h-full">

        <span class="text-yellow-400 text-xl mt-10">
            ❤
        </span>

       
    </div>

</div>
    </section>

    

    <!-- About Section -->
    <section id="about" class="hidden-section min-h-screen px-6 md:px-10 py-20 bg-[#0a0a0a] relative z-10">

        <div class="max-w-6xl mx-auto">

            <h2 class="text-4xl font-bold text-yellow-400 mb-16 text-center">
                About Me
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div>


                <p class="text-gray-400 leading-relaxed text-justify mb-5">
                     Hi, I’m Kala; a nickname inspired by my pen name,
                    “Niskala Rindu.” I am an Informatics Engineering student
                    with a strong passion for technology and creative writing.
                    While learning coding and application development,
                    I also find comfort in turning thoughts and emotions
                    into stories, poetry, and meaningful works.
                </p>

                <p class="text-gray-400 leading-relaxed text-justify mb-5">
                    For me, writing is not just a hobby,
                    but also a way to express ideas, hopes,
                    and life experiences through words.
                    I enjoy creating emotional and poetic stories
                    that often explore themes of loss,
                    longing, and hope.
                </p>

                <p class="text-gray-400 leading-relaxed text-justify mb-5">
                    Besides being active as an Informatics student,
                    I also participate in writing events
                    and continuously improve myself in both
                    technology and literature.
                </p>

                </div>

            <!-- Right Card -->
            <div class="bg-[#111111] border border-gray-800 rounded-3xl p-5 md:p-8 hover:border-yellow-400 transition duration-300">

                <div class="flex justify-between items-start gap-8">

                    <!-- Text -->
                    <div class="space-y-6">

            <!-- Name -->
            <div class="flex items-center gap-4 pb-4 border-b border-gray-800">
                <i data-lucide="user" class="w-6 h-6 text-yellow-400"></i>

                <div>
                    <p class="text-yellow-400 font-semibold">Name</p>
                    <p class="text-white">Latifatus Zahro</p>
                </div>
            </div>

            <!-- Major -->
            <div class="flex items-center gap-4 pb-4 border-b border-gray-800">
                <i data-lucide="graduation-cap" class="w-6 h-6 text-yellow-400"></i>

                <div>
                    <p class="text-yellow-400 font-semibold">Major</p>
                    <p class="text-white">Informatics Engineering</p>
                </div>
            </div>

            <!-- Semester -->
            <div class="flex items-center gap-4 pb-4 border-b border-gray-800">
                <i data-lucide="file-text" class="w-6 h-6 text-yellow-400"></i>

                <div>
                    <p class="text-yellow-400 font-semibold">Semester</p>
                    <p class="text-white">Semester 6</p>
                </div>
            </div>

            <!-- Focus -->
            <div class="flex items-center gap-4 pb-4 border-b border-gray-800">
                <i data-lucide="target" class="w-6 h-6 text-yellow-400"></i>

                <div>
                    <p class="text-yellow-400 font-semibold">Focus</p>
                    <p class="text-white">Web Development & Creative Writing</p>
                </div>
            </div>

           

        </div>
                    <!-- Photo -->
                    <div class="shrink-0">

                        <img
                            src="{{ asset('images/profile.jpg') }}"
                            alt="Profile"
                            class="w-32 h-32 object-cover rounded-2xl border border-yellow-400 shadow-[0_0_25px_rgba(250,204,21,0.4)]"
                        >

                    </div>

                </div>

            </div>

        </div>

        <!-- EDUCATION -->
        <div class="mt-24">

            <h3 class="text-4xl font-bold text-yellow-400 text-center mb-16">
                Education
            </h3>

            <div class="grid md:grid-cols-2 gap-10">

                <!-- LEFT -->
                <div class="space-y-10">

                    <!-- UNIVERSITY -->
                    <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                                hover:border-yellow-400 
                                hover:-translate-y-2
                                hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                                transition-all duration-500">

                        <span class="text-yellow-400 text-sm font-semibold">
                            2023 — Present
                        </span>

                        <h4 class="text-2xl font-bold text-white mt-2">
                            UNIVERSITAS MALIKUSSALEH
                        </h4>

                        <p class="text-gray-400 mt-2">
                            Informatics Engineering
                        </p>

                    </div>

                    <!-- SMA -->
                    <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                                hover:border-yellow-400 
                                hover:-translate-y-2
                                hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                                transition-all duration-500">

                        <span class="text-yellow-400 text-sm font-semibold">
                            2020 — 2023
                        </span>

                        <h4 class="text-2xl font-bold text-white mt-2">
                            SMA N 1 Manduamas
                        </h4>

                        <p class="text-gray-400 mt-2">
                            Science Major
                        </p>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="space-y-10">

                    <!-- SMP -->
                    <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                                hover:border-yellow-400 
                                hover:-translate-y-2
                                hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                                transition-all duration-500">

                        <span class="text-yellow-400 text-sm font-semibold">
                            2018 — 2020
                        </span>

                        <h4 class="text-2xl font-bold text-white mt-2">
                            SMP N 1 Sirandorung
                        </h4>

                    </div>

                    <!-- SD -->
                    <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                                hover:border-yellow-400 
                                hover:-translate-y-2
                                hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                                transition-all duration-500">
                        <span class="text-yellow-400 text-sm font-semibold">
                            2012 — 2018
                        </span>

                        <h4 class="text-2xl font-bold text-white mt-2">
                            Elementary School
                        </h4>

                        <p class="text-gray-400 mt-2">
                            SDN Gunung Meriah (Grade 1–4)
                        </p>

                        <p class="text-gray-400">
                            SDN 157917 Masnauli 3 (Grade 5–6)
                        </p>

                    </div>

                </div>

            </div>

        </div>

    <!-- EXPERIENCE SECTION -->
        <div class="mt-24">

            <h3 class="text-4xl font-bold text-yellow-400 text-center mb-16">
                Experience & Journey
            </h3>

            <div class="grid md:grid-cols-2 gap-8">

                <!-- Writing Competition -->
                <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                            hover:border-yellow-400 
                            hover:-translate-y-2
                            hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                            transition-all duration-500">

                    <h4 class="text-2xl font-bold text-white mb-4">
                        Writing Competitions
                    </h4>

                    <p class="text-gray-400 leading-relaxed">
                        Participated in several writing competitions and
                        creative writing events at the university level,
                        focusing on poetry, emotional storytelling,
                        and meaningful literary works.
                    </p>

                </div>

                <!-- HIMATIF -->
                <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                            hover:border-yellow-400 
                            hover:-translate-y-2
                            hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                            transition-all duration-500">
                    <h4 class="text-2xl font-bold text-white mb-4">
                        HIMATIF Organization
                    </h4>

                    <p class="text-gray-400 leading-relaxed">
                        Active as a member of the Religious Division in HIMATIF,
                        contributing to organizational activities,
                        teamwork, and student programs within the department.
                    </p>

                </div>

                <!-- OSIS -->
                <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                            hover:border-yellow-400 
                            hover:-translate-y-2
                            hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                            transition-all duration-500">

                    <h4 class="text-2xl font-bold text-white mb-4">
                        OSIS Experience
                    </h4>

                    <p class="text-gray-400 leading-relaxed">
                        Served as a member of the Security Division during junior high school,
                        helping maintain discipline, responsibility,
                        and coordination during school activities.
                    </p>

                </div>

                <!-- Scout -->
                <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                            hover:border-yellow-400 
                            hover:-translate-y-2
                            hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                            transition-all duration-500">

                    <h4 class="text-2xl font-bold text-white mb-4">
                        Scout Activities
                    </h4>

                    <p class="text-gray-400 leading-relaxed">
                        Participated in scouting activities during senior high school,
                        improving teamwork, leadership,
                        discipline, and communication skills.
                    </p>

                </div>

                <!-- Web Development -->
                <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                            hover:border-yellow-400 
                            hover:-translate-y-2
                            hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                            transition-all duration-500">

                    <h4 class="text-2xl font-bold text-white mb-4">
                        Web Development Learning
                    </h4>

                    <p class="text-gray-400 leading-relaxed">
                        Currently learning Laravel, frontend development,
                        UI design, and building personal projects
                        such as portfolio websites and information systems.
                    </p>

                </div>

                <!-- Creative Writing -->
                <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                            hover:border-yellow-400 
                            hover:-translate-y-2
                            hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                            transition-all duration-500">
                    <h4 class="text-2xl font-bold text-white mb-4">
                        Creative Writing Journey
                    </h4>

                    <p class="text-gray-400 leading-relaxed">
                        Passionate about writing poetry, emotional stories,
                        and creative literary works as a way
                        to express ideas, emotions, and personal experiences.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Skills Section -->
    <section id="skills" class="hidden-section min-h-screen px-6 md:px-10 py-20 md:py-24 relative z-10">

        <h2 class="text-4xl md:text-5xl font-bold text-center text-yellow-400 mb-20">
            My Skills
        </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-6xl mx-auto">

       <!-- Learning Skills -->
        <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                    hover:border-yellow-400 
                    hover:-translate-y-2
                    hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                    transition-all duration-500">

            <h3 class="text-3xl font-semibold mb-10 text-white">
                Technical Skills 
            </h3>

            <!-- Laravel -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>Laravel Development</span>
                    <span>70%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="70%">
                    </div>
                </div>

            </div>

            <!-- PHP -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>PHP Programming</span>
                    <span>60%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="60%">
                    </div>
                </div>

            </div>

            <!-- Database -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>Database & MySQL</span>
                    <span>68%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="68%">
                    </div>
                </div>

            </div>

            <!-- UI/UX -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>UI/UX Design</span>
                    <span>70%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="70%">
                    </div>
                </div>

            </div>

        </div>

        <!-- Soft Skills -->
        <div class="bg-[#111111] border border-gray-800 rounded-3xl p-6 
                    hover:border-yellow-400 
                    hover:-translate-y-2
                    hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
                    transition-all duration-500">

            <h3 class="text-3xl font-semibold mb-10 text-white">
                Soft Skills 
            </h3>

            <!-- Creative Thinking -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>Creative Thinking</span>
                    <span>90%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="90%">
                    </div>
                </div>

            </div>

            <!-- Communication -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>Communication</span>
                    <span>78%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="78%">
                    </div>
                </div>

            </div>

            <!-- Problem Solving -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>Problem Solving</span>
                    <span>85%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="85%">
                    </div>
                </div>

            </div>

            <!-- Team Work -->
            <div class="mb-7">

                <div class="flex justify-between mb-2">
                    <span>Team Work</span>
                    <span>82%</span>
                </div>

                <div class="w-full bg-gray-800 rounded-full h-3">
                    <div 
                        class="skill-progress bg-yellow-400 h-3 rounded-full w-0 transition-all duration-[2000ms]"
                        data-width="82%">
                    </div>
                </div>

            </div>

        </div>
</section>

    <!-- Projects Section -->
    <section id="projects" class="hidden-section min-h-screen px-6 md:px-10 py-20 md:py-24 bg-[#0a0a0a] relative z-10">

        <h2 class="text-4xl md:text-5xl font-bold text-center text-yellow-400 mb-20">
            My Projects
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

            <!-- Project 1 -->
           <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-[0_0_30px_rgba(250,204,21,0.3)] transition-all duration-500">

                <img 
                    src="{{ asset('images/simpeg.png') }}"
                    alt="SIMPEG"
                    class="w-full h-52 object-cover group-hover:scale-110 transition duration-500"
                >

                <div class="p-6">

                    <h3 class="text-2xl font-semibold mb-3">
                        SIMPEG System
                    </h3>

                    <p class="text-gray-400 text-sm leading-relaxed mb-5">
                        Employee management system with payroll,
                        employee data management, and responsive
                        dashboard built using Laravel.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-5">

                        <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                            Laravel
                        </span>

                        <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                            MySQL
                        </span>

                        <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                            Tailwind
                        </span>

                    </div>

                    <a href="/projects"
                    class="block w-full text-center bg-yellow-400 text-black py-3 rounded-xl font-semibold hover:scale-105 transition">
                        View Project
                    </a>

                </div>

            </div>

            <!-- Project 2 -->
           <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

                <img
                    src="{{ asset('images/porto.png') }}"
                    alt="Payroll"
                    class="w-full h-52 object-cover"
                />

                <div class="p-6">

                    <h3 class="text-2xl font-semibold mb-3">
                        Personal Portfolio Website
                    </h3>

                    <p class="text-gray-400 text-sm leading-relaxed mb-5">
                        Personal portfolio website designed to showcase
                        projects, skills, and digital works with modern,
                        responsive, and aesthetic user interface.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-5">

                        <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                            Laravel
                        </span>

                        <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                            Tailwind CSS
                        </span>

                        <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                            JavaScript
                        </span>

                    </div>

                   <a href="/projects"
                    class="block w-full text-center bg-yellow-400 text-black py-3 rounded-xl font-semibold hover:scale-105 transition">
                        View Project
                    </a>

                </div>

            </div>

    <!-- Project 3 -->
    <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden hover:border-yellow-400 hover:-translate-y-3 hover:shadow-yellow-400/20 hover:shadow-2xl transition duration-500">

        <img
            src="{{ asset('images/writing.jpeg') }}"
            alt="Writing"
            class="w-full h-52 object-cover"
        />

        <div class="p-6">

            <h3 class="text-2xl font-semibold mb-3">
                Creative Writing Blog
            </h3>

            <p class="text-gray-400 text-sm leading-relaxed mb-5">
                A personal creative writing project containing poetry,
                short stories, quotes, and published anthology works
                from various national writing events.
            </p>

            <div class="flex flex-wrap gap-2 mb-5">

                <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                    Poetry
                </span>

                <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                    Short Story
                </span>

                <span class="bg-yellow-400 text-black text-xs px-3 py-1 rounded-full">
                    Literature
                </span>

            </div>

        <a href="/projects/writing"
            class="block w-full text-center bg-yellow-400 text-black py-3 rounded-xl font-semibold hover:scale-105 transition">
                View Project
            </a>

        </div>

    </div>


       <!-- Button -->
        <div class="w-full flex justify-center mt-14 col-span-full">

            <a href="/projects"
            class="inline-block border border-yellow-400 text-yellow-400 px-8 py-3 rounded-full hover:bg-yellow-400 hover:text-black transition duration-300">

                View All Projects

            </a>

        </div>

    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="py-24 px-6 md:px-20 bg-black">

        <!-- Title -->
        <div class="text-center mb-16">

            <h2 class="text-5xl md:text-6xl font-bold text-yellow-400 mb-6">
                Certificates & Achievements
            </h2>

            <p class="text-gray-400 text-lg max-w-3xl mx-auto leading-relaxed">
                A collection of certifications, seminars, workshops,
                competitions, and achievements throughout my journey.
            </p>

        </div>

        <!-- Certificate Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Featured Achievement -->
            <div class="group bg-[#111111] border border-yellow-400/30 rounded-3xl overflow-hidden
                        hover:shadow-[0_0_30px_rgba(255,215,0,0.35)]
                        transition duration-500 hover:-translate-y-2">

                <div class="overflow-hidden">

                    <img src="{{ asset('images/certificates/Sertifikat.jpg') }}"
                        alt="Featured Achievement"
                        class="w-full h-64 object-cover
                        group-hover:scale-105 transition duration-500">

                </div>

                <div class="p-6">

                    <span class="text-yellow-400 text-sm font-semibold">
                        Featured Achievement
                    </span>

                    <h3 class="text-2xl font-bold text-white mt-2 mb-3">
                        National Poetry Competition
                    </h3>

                    <p class="text-gray-400 leading-relaxed mb-4">
                        Awarded 3rd Place in a National Poetry 
                        Competition organized by Era Media Publisher 
                        for the poem "Rintik yang Menyimpan Luka".
                    </p>

                    <a href="/certificates/featured"
                    target="_blank"
                    class="inline-block mt-7 border border-yellow-400 text-yellow-400
                    px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black
                    transition duration-300">
                        View Collection
                    </a>

                </div>

            </div>

            <!-- Writing Achievement -->
            <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden
                        hover:border-yellow-400
                        hover:shadow-[0_0_25px_rgba(255,215,0,0.25)]
                        transition duration-500 hover:-translate-y-2">

                <div class="overflow-hidden">

                    <img src="{{ asset('images/certificates/EMN.jpeg') }}"
                        alt="Writing Achievement"
                        class="w-full h-64 object-cover
                        group-hover:scale-105 transition duration-500">

                </div>

                <div class="p-6">

                    <span class="text-yellow-400 text-sm font-semibold">
                        Writing Achievement
                    </span>

                    <h3 class="text-2xl font-bold text-white mt-2 mb-3">
                        Literary & Writing Awards
                    </h3>

                    <p class="text-gray-400 leading-relaxed mb-4">
                        Collection of poetry, short stories, quotes, letters, 
                        anthology publications, selected writer recognitions, 
                        and literary achievements.
                    </p>

                    <a href="/certificates/writing"
                    class="inline-block px-5 py-2 border border-yellow-400
                    text-yellow-400 rounded-full
                    hover:bg-yellow-400 hover:text-black
                    transition duration-300">

                        View Collection

                    </a>

                </div>

            </div>

            <!-- Webinar -->
            <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden
                        hover:border-yellow-400
                        hover:shadow-[0_0_25px_rgba(255,215,0,0.25)]
                        transition duration-500 hover:-translate-y-2">

                <div class="overflow-hidden">

                    <img src="{{ asset('images/certificates/Webinar1.jpeg') }}"
                        alt="Webinar"
                        class="w-full h-64 object-cover
                        group-hover:scale-105 transition duration-500">

                </div>

                <div class="p-6">

                    <span class="text-yellow-400 text-sm font-semibold">
                        Webinar & Short Class
                    </span>

                    <h3 class="text-2xl font-bold text-white mt-2 mb-3">
                        Webinars & Short Courses
                    </h3>

                    <p class="text-gray-400 leading-relaxed mb-6">
                        Collection of webinar and short course certificates covering 
                        technology, productivity, career development, and digital skills.
                    </p>

                    <a href="/certificates/webinar"
                    class="inline-block mt-5 border border-yellow-400 text-yellow-400
                    px-5 py-2 rounded-full hover:bg-yellow-400 hover:text-black
                    transition duration-300">
                        View Collection
                    </a>

                </div>

            </div>

            <!-- Training -->
            <div class="group bg-[#111111] border border-gray-800 rounded-3xl overflow-hidden
                        hover:border-yellow-400
                        hover:shadow-[0_0_25px_rgba(255,215,0,0.25)]
                        transition duration-500 hover:-translate-y-2">

                <div class="overflow-hidden">

                    <img src="{{ asset('images/certificates/Workshop.jpeg') }}"
                        alt="Training"
                        class="w-full h-64 object-cover
                        group-hover:scale-105 transition duration-500">

                </div>

                <div class="p-6">

                    <span class="text-yellow-400 text-sm font-semibold">
                        Training & Workshop
                    </span>

                    <h3 class="text-2xl font-bold text-white mt-2 mb-3">
                        Professional Development
                    </h3>

                    <p class="text-gray-400 leading-relaxed mb-6">
                        Collection of workshop and training certificates 
                        covering WebGIS, journalism, digital skills, 
                        and professional development programs.
                    </p>

                    <a href="/certificates/training"
                    class="inline-block px-5 py-2 border border-yellow-400
                    text-yellow-400 rounded-full
                    hover:bg-yellow-400 hover:text-black
                    transition duration-300">

                        View Collection

                    </a>

                </div>

            </div>

        </div>

        

    </section>

    <!-- Contact Section -->
    <section id="contact" class="hidden-section min-h-screen px-6 md:px-10 py-20 md:py-24 relative z-10">

    <div class="max-w-7xl mx-auto">

        <!-- Title -->
        <div class="text-center mb-16">

            <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-6">
                Contact Me
            </h2>

            <p class="text-gray-400 leading-relaxed">
                Interested in working together or discussing creative ideas?
                Feel free to reach out and let's build something amazing.
            </p>

        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 max-w-5xl mx-auto">

            <!-- Contact Cards -->
    <a href="https://www.instagram.com/latif.az_?igsh=emtxdzdoZzRpZjRx"
    target="_blank"
    class="group bg-black/30 backdrop-blur-md border border-yellow-500/10 rounded-2xl p-5 hover:border-yellow-400 hover:-translate-y-1 hover:shadow-[0_0_25px_rgba(250,204,21,0.15)] transition-all duration-500">

        <h3 class="text-yellow-400 font-semibold text-lg mb-2">
            Instagram
        </h3>

        <p class="text-gray-300">
            @latif.az_
        </p>

        <span class="absolute bottom-5 right-5
             text-yellow-400 text-xl
             opacity-0 translate-x-2
             group-hover:opacity-100
             group-hover:translate-x-0
             transition-all duration-300">
        →
        </span>
 
    </a>

    <a href="https://wa.me/6281232647601?text=Hi%20Kala,%0AI%20just%20visited%20your%20portfolio%20and%20really%20enjoyed%20exploring%20your%20projects.%20I'd%20love%20to%20connect%20and%20learn%20more%20about%20your%20work."
    target="_blank"
    class="group bg-black/30 backdrop-blur-md border border-yellow-500/10 rounded-2xl p-5 hover:border-yellow-400 hover:-translate-y-1 hover:shadow-[0_0_25px_rgba(250,204,21,0.15)] transition-all duration-500">

        <h3 class="text-yellow-400 font-semibold text-lg mb-2">
            WhatsApp
        </h3>

        <p class="text-gray-300">
            Chat via WhatsApp
        </p>

        <span class="absolute bottom-5 right-5
             text-yellow-400 text-xl
             opacity-0 translate-x-2
             group-hover:opacity-100
             group-hover:translate-x-0
             transition-all duration-300">
        →
        </span>

    </a>

    <a href="mailto:latifatusaza@gmail.com"
    class="group bg-black/30 backdrop-blur-md border border-yellow-500/10 rounded-2xl p-5 hover:border-yellow-400 hover:-translate-y-1 hover:shadow-[0_0_25px_rgba(250,204,21,0.15)] transition-all duration-500">

        <h3 class="text-yellow-400 font-semibold text-lg mb-2">
            Email
        </h3>

        <p class="text-gray-300 truncate">
            latifatusaza@gmail.com
        </p>

        <span class="absolute bottom-5 right-5
             text-yellow-400 text-xl
             opacity-0 translate-x-2
             group-hover:opacity-100
             group-hover:translate-x-0
             transition-all duration-300">
        →
        </span>

    </a>

    <a href="https://github.com/latifatus"
    target="_blank"
    class="group bg-black/30 backdrop-blur-md border border-yellow-500/10 rounded-2xl p-5 hover:border-yellow-400 hover:-translate-y-1 hover:shadow-[0_0_25px_rgba(250,204,21,0.15)] transition-all duration-500">

        <h3 class="text-yellow-400 font-semibold text-lg mb-2">
            GitHub
        </h3>

        <p class="text-gray-300 truncate">
            github.com/latifatus
        </p>

        <span class="absolute bottom-5 right-5
             text-yellow-400 text-xl
             opacity-0 translate-x-2
             group-hover:opacity-100
             group-hover:translate-x-0
             transition-all duration-300">
            →
        </span>
    </a>

    </div>

    <!-- Send Message -->
    <div class="max-w-5xl mx-auto mt-14 flex justify-center">

        <div class="w-full bg-black/30 backdrop-blur-md border 
        border-gray-800 rounded-3xl p-8
        hover:border-yellow-400/30 transition-all duration-500">

            <h3 class="text-3xl font-bold text-yellow-400 mb-3">
                Send Message
            </h3>

            <p class="text-gray-400 mb-8">
                Mari terhubung. Siapa tahu, dari satu pesan sederhana lahir sesuatu yang luar biasa.
            </p>

            <form action="https://formspree.io/f/mykvrlln" method="POST" class="space-y-6">

                <input type="hidden" name="access_key" value="dba950f2-de6e-4513-be29-c09bc296f830">

                <input type="hidden" name="subject" value="New Inquiry from ItsKala Portfolio">

                <div>
                    <input
                        type="text"
                        name="name"
                        placeholder="Nama Anda"
                        required
                        class="w-full bg-black/40 border border-gray-700 rounded-2xl px-5 py-4 text-white focus:border-yellow-400 outline-none transition">
                </div>

                <div>
                    <input
                        type="email"
                        name="email"
                        placeholder="email@anda.com"
                        required
                        class="w-full bg-black/40 border border-gray-700 rounded-2xl px-5 py-4 text-white focus:border-yellow-400 outline-none transition">
                </div>

                <div>
                    <textarea
                        name="message"
                        rows="6"
                        placeholder="Bagikan ide, cerita, atau pesanmu di sini..."
                        required
                        class="w-full bg-black/40 border border-gray-700 rounded-2xl px-5 py-4 text-white focus:border-yellow-400 outline-none transition resize-none"></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full bg-yellow-400 text-black py-4 rounded-2xl font-semibold hover:scale-[1.02] transition duration-300">

                    Send Message

                </button>

            </form>

        </div>

    </div>




    </section>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-8 text-center text-gray-500 text-sm">

        © 2026 Kala Portfolio. All Rights Reserved.

    </footer>

    <!-- Typed Script -->
    <script>

            var typed = new Typed('#typing', {

                strings: [
                    'Informatics Student',
                    'Creative Writer',
                    'Aspiring Web Developer'
                ],

                typeSpeed: 60,
                backSpeed: 40,
                loop: true

            });

        </script>

        <!-- Scroll Animation -->
        <script>

        document.addEventListener("DOMContentLoaded", function () {

            const sections = document.querySelectorAll(".hidden-section");

            const observer = new window.IntersectionObserver(function(entries) {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                    } else {

                        entry.target.classList.remove("show");

                    }

                });

            }, {
                threshold: 0.15
            });

            sections.forEach((section) => {
                observer.observe(section);
            });

        });

    </script>

    <!-- ACTIVE NAVBAR SCRIPT -->
    <script>

        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", () => {

            let current = "";

            sections.forEach((section) => {

                const sectionTop = section.offsetTop - 200;

                if (scrollY >= sectionTop) {
                    current = section.getAttribute("id");
                }

            });

            navLinks.forEach((link) => {

                link.classList.remove("active");

                if (link.getAttribute("href").includes(current)) {
                    link.classList.add("active");
                }

            });

        });
    </script>

    <!-- SKILL BAR ANIMATION -->
    <script>

        const skillBars = document.querySelectorAll('.skill-progress');

        const skillObserver = new window.IntersectionObserver((entries) => {

            entries.forEach((entry) => {

                const bar = entry.target;

                if (entry.isIntersecting) {

                    bar.style.width = bar.dataset.width;

                } else {

                    bar.style.width = "0%";

                }

            });

        }, {
            threshold: 0.5
        });

        skillBars.forEach((bar) => {
            skillObserver.observe(bar);
        });

    </script>

    <!-- MOBILE MENU SCRIPT -->
    <script>

        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        menuBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });

        mobileLinks.forEach(link => {

            link.addEventListener('click', () => {

                mobileMenu.classList.add('hidden');

            });

        });

    </script>

    <!-- Scroll Progress Script -->
        <script>

        window.addEventListener('scroll', () => {

            const scrollTop = window.scrollY;

            const docHeight =
                document.documentElement.scrollHeight - window.innerHeight;

            const scrollPercent = (scrollTop / docHeight) * 100;

            document.getElementById('progress-bar').style.width =
                scrollPercent + '%';

        });

    </script>
    
    <!-- Loading Screen Script -->
    <script>

    window.addEventListener('load', () => {

        const loader = document.getElementById('loader');

        setTimeout(() => {

            loader.style.opacity = '0';

            setTimeout(() => {
                loader.style.display = 'none';
            }, 700);

        }, 1500);

    });

    </script>
    
    <!-- Mouse Glow Script -->
    <script>

        const glow = document.getElementById('mouse-glow');

        document.addEventListener('mousemove', (e) => {

            glow.style.left = e.clientX - 150 + 'px';
            glow.style.top = e.clientY - 150 + 'px';

        });

    </script>

    <!-- Particle Script -->
    <script>

        tsParticles.load("particles-js", {

            background: {
                color: "transparent"
            },

            particles: {

                number: {
                    value: 50
                },

                color: {
                    value: "#facc15"
                },

                links: {
                    enable: true,
                    color: "#facc15",
                    opacity: 0.2
                },

                move: {
                    enable: true,
                    speed: 1
                },

                opacity: {
                    value: 0.3
                },

                size: {
                    value: 2
                }

            }

        });

    </script>

    <script>

        window.addEventListener("load", () => {

            const loader = document.getElementById("loader");

            setTimeout(() => {
                loader.style.opacity = "0";
                loader.style.visibility = "hidden";
            }, 2200);

        });

    </script>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        lucide.createIcons();
    </script>


</body>
</html>
