<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - MW Architectural Design Studio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom Font Setup -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght=400;700&family=Plus+Jakarta+Sans:wght=300;400;500;600&display=swap');
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-800 antialiased relative">

    <!-- Sticky Floating Contact Sidebar -->
    <div class="fixed right-4 top-1/3 z-50 bg-white/90 backdrop-blur-md shadow-xl rounded-2xl p-3 flex flex-col gap-5 border border-gray-200">
        <a href="#" class="flex flex-col items-center text-green-600 hover:scale-105 transition"><i class="fab fa-whatsapp text-2xl"></i><span class="text-[10px] font-semibold mt-1">WhatsApp</span></a>
        <a href="#" class="flex flex-col items-center text-blue-600 hover:scale-105 transition"><i class="fas fa-phone text-xl"></i><span class="text-[10px] font-semibold mt-1">Call Us</span></a>
        <a href="#" class="flex flex-col items-center text-amber-600 hover:scale-105 transition"><i class="fas fa-envelope text-xl"></i><span class="text-[10px] font-semibold mt-1">Email</span></a>
        <a href="#" class="flex flex-col items-center text-gray-700 hover:scale-105 transition"><i class="fas fa-calendar-alt text-xl"></i><span class="text-[10px] font-semibold mt-1">Book Now</span></a>
    </div>

    <!-- Header / Navbar -->
    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-40 border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <span class="text-2xl font-bold font-serif text-amber-700 tracking-wider">MW</span>
                <div class="border-l border-gray-300 pl-2 leading-none">
                    <span class="text-xs font-bold block uppercase tracking-widest text-gray-700">Architectural Design Studio</span>
                    <span class="text-[10px] text-gray-500">25+ Years of Excellence</span>
                </div>
            </div>
            <nav class="hidden md:flex gap-6 text-xs font-semibold uppercase tracking-wider text-gray-600">
                <a href="#" class="hover:text-amber-600 transition">Home</a>
                <a href="#" class="hover:text-amber-600 transition">About</a>
                <a href="#" class="text-amber-600 border-b-2 border-amber-600 pb-1">Services</a>
                <a href="#" class="hover:text-amber-600 transition">Portfolio</a>
                <a href="#" class="hover:text-amber-600 transition">AI Design Studio</a>
                <a href="#" class="hover:text-amber-600 transition">Before & After</a>
                <a href="#" class="hover:text-amber-600 transition">Blog</a>
                <a href="#" class="hover:text-amber-600 transition">Contact</a>
            </nav>
            <a href="#" class="bg-amber-600 text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider rounded shadow-md hover:bg-amber-700 transition">Get a Free Quote</a>
        </div>
    </header>

    <!-- Page Title / Banner Section -->
    <section class="max-w-7xl mx-auto px-6 pt-16 pb-8 text-center space-y-3">
        <p class="text-xs uppercase tracking-widest text-amber-600 font-bold">What We Offer</p>
        <h1 class="text-4xl lg:text-5xl font-serif text-gray-900 font-bold">Our Architectural Services</h1>
        <p class="text-sm text-gray-500 max-w-2xl mx-auto">We combine 25+ years of expertise with cutting-edge technology to provide comprehensive drafting, interior, and 3D rendering solutions tailored to your unique lifestyle.</p>
    </section>

    <!-- Detailed Services Grid -->
    <section class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: House Design -->
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 text-2xl mb-6 shadow-sm">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">House Design</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">Custom residential conceptualization that flawlessly blends elegance with modern functionality. We shape blueprints tailored around your family's personal story and lifestyle parameters.</p>
                </div>
                <a href="#" class="text-xs font-bold uppercase tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-2 group">Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
            </div>

            <!-- Service 2: Architectural Drafting -->
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 text-2xl mb-6 shadow-sm">
                        <i class="fas fa-pen-ruler"></i>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Architectural Drafting</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">High-precision CAD sketching and documentation mapping for layouts. We convert abstract thoughts into pinpoint structural outlines optimized for modern construction crews.</p>
                </div>
                <a href="#" class="text-xs font-bold uppercase tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-2 group">Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
            </div>

            <!-- Service 3: Working Drawings -->
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 text-2xl mb-6 shadow-sm">
                        <i class="fas fa-map"></i>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Working Drawings</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">Ultra-detailed, construction-ready schematics ensuring flawless on-site material execution. Minimize project downtime and material wastage with calculated cross-sections.</p>
                </div>
                <a href="#" class="text-xs font-bold uppercase tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-2 group">Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
            </div>

            <!-- Service 4: Council Submission Drawings -->
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 text-2xl mb-6 shadow-sm">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Council Submission</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">100% compliant documentation designed to meet municipal codes seamlessly across Australia, Pakistan, and Canada. Speed up tedious building permit clearances smoothly.</p>
                </div>
                <a href="#" class="text-xs font-bold uppercase tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-2 group">Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
            </div>

            <!-- Service 5: Interior Design -->
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 text-2xl mb-6 shadow-sm">
                        <i class="fas fa-couch"></i>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">Interior Design</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">Bespoke indoor modeling utilizing optimal texture layering, lighting setups, and smart space ergonomics. Experience luxury aesthetics combined with practical storage answers.</p>
                </div>
                <a href="#" class="text-xs font-bold uppercase tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-2 group">Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
            </div>

            <!-- Service 6: 3D Modeling & Rendering -->
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 text-2xl mb-6 shadow-sm">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-gray-900 mb-3">3D Modeling & Rendering</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">Photorealistic ultra-HD digital mockups that bring ideas alive before digging the foundation. See lighting depth, shadow metrics, and realistic color palettes immediately.</p>
                </div>
                <a href="#" class="text-xs font-bold uppercase tracking-wider text-amber-600 hover:text-amber-700 flex items-center gap-2 group">Learn More <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
            </div>

        </div>
    </section>

    <!-- Work Process Section -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="bg-white rounded-2xl p-10 lg:p-14 shadow-sm border border-gray-200/80">
            <div class="text-center space-y-2 mb-12">
                <p class="text-xs uppercase tracking-widest text-amber-600 font-bold">Our Workflow</p>
                <h2 class="text-3xl font-serif text-gray-900 font-bold">How We Work Together</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <!-- Step 1 -->
                <div class="text-center space-y-3 relative">
                    <div class="w-12 h-12 bg-amber-600 text-white font-bold rounded-full flex items-center justify-center mx-auto text-sm shadow-md">01</div>
                    <h4 class="font-bold text-gray-900">Consultation</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Discussing project scales, visions, and budget considerations.</p>
                </div>
                <!-- Step 2 -->
                <div class="text-center space-y-3 relative">
                    <div class="w-12 h-12 bg-amber-600 text-white font-bold rounded-full flex items-center justify-center mx-auto text-sm shadow-md">02</div>
                    <h4 class="font-bold text-gray-900">Concept Blueprint</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Presenting basic schematic designs and general layout themes.</p>
                </div>
                <!-- Step 3 -->
                <div class="text-center space-y-3 relative">
                    <div class="w-12 h-12 bg-amber-600 text-white font-bold rounded-full flex items-center justify-center mx-auto text-sm shadow-md">03</div>
                    <h4 class="font-bold text-gray-900">3D Render & Review</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Polishing visuals with high-end CGI for client verification.</p>
                </div>
                <!-- Step 4 -->
                <div class="text-center space-y-3 relative">
                    <div class="w-12 h-12 bg-amber-600 text-white font-bold rounded-full flex items-center justify-center mx-auto text-sm shadow-md">04</div>
                    <h4 class="font-bold text-gray-900">Final Handover</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Delivering dynamic CAD layouts ready for builders or councils.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ / Call-To-Action Section -->
    <section class="max-w-4xl mx-auto px-6 py-12 mb-16 text-center space-y-6">
        <h3 class="text-2xl font-serif text-gray-900 font-bold">Ready to Bring Your Vision to Reality?</h3>
        <p class="text-sm text-gray-500 max-w-xl mx-auto">Get in touch today for a free discovery session. Our experienced drafting engineers are online to evaluate your site dimensions.</p>
        <div>
            <a href="#" class="bg-amber-600 text-white px-8 py-4 text-xs font-bold uppercase tracking-wider rounded shadow-lg hover:bg-amber-700 transition inline-block">Schedule a Free Appointment</a>
        </div>
    </section>

</body>
</html>