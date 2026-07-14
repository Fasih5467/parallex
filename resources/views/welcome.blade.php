<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MW Architectural Design Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap');
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-800 antialiased relative">

    <div class="fixed right-4 top-1/3 z-50 bg-white/90 backdrop-blur-md shadow-xl rounded-2xl p-3 flex flex-col gap-5 border border-gray-200">
        <a href="#" class="flex flex-col items-center text-green-600 hover:scale-105 transition"><i class="fab fa-whatsapp text-2xl"></i><span class="text-[10px] font-semibold mt-1">WhatsApp</span></a>
        <a href="#" class="flex flex-col items-center text-blue-600 hover:scale-105 transition"><i class="fas fa-phone text-xl"></i><span class="text-[10px] font-semibold mt-1">Call Us</span></a>
        <a href="#" class="flex flex-col items-center text-amber-600 hover:scale-105 transition"><i class="fas fa-envelope text-xl"></i><span class="text-[10px] font-semibold mt-1">Email</span></a>
        <a href="#" class="flex flex-col items-center text-gray-700 hover:scale-105 transition"><i class="fas fa-calendar-alt text-xl"></i><span class="text-[10px] font-semibold mt-1">Book Now</span></a>
    </div>

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
                <a href="#" class="text-amber-600 border-b-2 border-amber-600 pb-1">Home</a>
                <a href="#" class="hover:text-amber-600 transition">About</a>
                <a href="{{url('/services')}}" class="hover:text-amber-600 transition">Services</a>
                <a href="#" class="hover:text-amber-600 transition">Portfolio</a>
                <a href="#" class="hover:text-amber-600 transition">AI Design Studio</a>
                <a href="#" class="hover:text-amber-600 transition">Before & After</a>
                <a href="#" class="hover:text-amber-600 transition">Blog</a>
                <a href="#" class="hover:text-amber-600 transition">Contact</a>
            </nav>
            <a href="#" class="bg-amber-600 text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider rounded shadow-md hover:bg-amber-700 transition">Get a Free Quote</a>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-5 space-y-6">
            <p class="text-xs uppercase tracking-widest text-gray-500 font-bold">Transforming Ideas Into</p>
            <h1 class="text-5xl lg:text-6xl font-serif leading-tight text-gray-900">
                Beautiful <br><span class="text-amber-600 font-bold">Homes</span>
            </h1>
            <p class="text-lg text-gray-600 font-medium">25+ Years of Architectural Design & Drafting Experience</p>
            <p class="text-sm text-gray-500">Projects Completed in: <span class="font-semibold text-gray-700">Australia • Pakistan • Canada</span></p>
            <div class="flex gap-4 pt-2">
                <a href="#" class="bg-amber-600 text-white px-6 py-3 text-xs font-bold uppercase tracking-wider rounded shadow-lg hover:bg-amber-700 transition">Get a Free Consultation</a>
                <a href="#" class="border-2 border-gray-300 text-gray-700 bg-white px-6 py-3 text-xs font-bold uppercase tracking-wider rounded hover:bg-gray-50 transition">View Portfolio</a>
            </div>
        </div>
        <div class="lg:col-span-7">
            <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80" alt="Modern House" class="w-full h-[450px] object-cover">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-16">
        <div class="bg-white rounded-2xl p-8 shadow-md border border-gray-200/60 grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
            <div>
                <div class="text-3xl font-bold text-amber-600 font-serif">25+</div>
                <div class="text-xs text-gray-500 font-medium mt-1">Years Experience</div>
            </div>
            <div class="border-l border-gray-100">
                <div class="text-3xl font-bold text-amber-600 font-serif">100+</div>
                <div class="text-xs text-gray-500 font-medium mt-1">Projects Completed</div>
            </div>
            <div class="border-l border-gray-100">
                <div class="text-3xl font-bold text-amber-600 font-serif">3</div>
                <div class="text-xs text-gray-500 font-medium mt-1">Countries Served</div>
            </div>
            <div class="border-l border-gray-100">
                <div class="text-3xl font-bold text-amber-600 font-serif">100%</div>
                <div class="text-xs text-gray-500 font-medium mt-1">Client Satisfaction</div>
            </div>
            <div class="border-l border-gray-100">
                <div class="text-3xl font-bold text-amber-600 font-serif">Award</div>
                <div class="text-xs text-gray-500 font-medium mt-1">Winning Designs</div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12">
        <div class="text-center space-y-2 mb-12">
            <p class="text-xs uppercase tracking-widest text-amber-600 font-bold">My Architectural Services</p>
            <h2 class="text-3xl font-serif text-gray-900">What I Do</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-5">
            <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition text-center flex flex-col items-center">
                <div class="text-amber-600 text-3xl mb-4"><i class="fas fa-home"></i></div>
                <h3 class="font-bold text-sm text-gray-800 mb-2">House Design</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Custom house designs that reflect your lifestyle and vision.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition text-center flex flex-col items-center">
                <div class="text-amber-600 text-3xl mb-4"><i class="fas fa-pen-ruler"></i></div>
                <h3 class="font-bold text-sm text-gray-800 mb-2">Architectural Drafting</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Precise and detailed drafting services for all your needs.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition text-center flex flex-col items-center">
                <div class="text-amber-600 text-3xl mb-4"><i class="fas fa-map"></i></div>
                <h3 class="font-bold text-sm text-gray-800 mb-2">Working Drawings</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Construction-ready drawings with technical accuracy.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition text-center flex flex-col items-center">
                <div class="text-amber-600 text-3xl mb-4"><i class="fas fa-file-signature"></i></div>
                <h3 class="font-bold text-sm text-gray-800 mb-2">Council Submission Drawings</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Compliant drawings for council approval and permits.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition text-center flex flex-col items-center">
                <div class="text-amber-600 text-3xl mb-4"><i class="fas fa-couch"></i></div>
                <h3 class="font-bold text-sm text-gray-800 mb-2">Interior Design</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Beautiful interior spaces that inspire and functional.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200/80 shadow-sm hover:shadow-md transition text-center flex flex-col items-center">
                <div class="text-amber-600 text-3xl mb-4"><i class="fas fa-cubes"></i></div>
                <h3 class="font-bold text-sm text-gray-800 mb-2">3D Modeling & Rendering</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Stunning 3D models and realistic renders to visualize ideas.</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12 mb-12">
        <div class="text-center space-y-2 mb-8">
            <p class="text-xs uppercase tracking-widest text-amber-600 font-bold">Featured Projects</p>
            <h2 class="text-3xl font-serif text-gray-900">Explore My Recent Work</h2>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-10 text-xs font-bold uppercase tracking-wider">
            <button class="bg-amber-600 text-white px-5 py-2.5 rounded shadow">All Projects</button>
            <button class="bg-white text-gray-600 border border-gray-200 px-5 py-2.5 rounded hover:bg-gray-50 transition">Australia</button>
            <button class="bg-white text-gray-600 border border-gray-200 px-5 py-2.5 rounded hover:bg-gray-50 transition">Pakistan</button>
            <button class="bg-white text-gray-600 border border-gray-200 px-5 py-2.5 rounded hover:bg-gray-50 transition">Canada</button>
            <button class="bg-white text-gray-600 border border-gray-200 px-5 py-2.5 rounded hover:bg-gray-50 transition">Modern Houses</button>
            <button class="bg-white text-gray-600 border border-gray-200 px-5 py-2.5 rounded hover:bg-gray-50 transition">Interior Design</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200/80 group">
                <div class="overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=600&q=80" alt="Luxury Villa" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-5">
                    <h4 class="font-bold text-base text-gray-900">Luxury Villa</h4>
                    <p class="text-xs text-gray-500 mt-1">Sydney, Australia</p>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200/80 group">
                <div class="overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=600&q=80" alt="Modern House" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-5">
                    <h4 class="font-bold text-base text-gray-900">Modern House</h4>
                    <p class="text-xs text-gray-500 mt-1">Karachi, Pakistan</p>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200/80 group">
                <div class="overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80" alt="Contemporary Home" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-5">
                    <h4 class="font-bold text-base text-gray-900">Contemporary Home</h4>
                    <p class="text-xs text-gray-500 mt-1">Toronto, Canada</p>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200/80 group">
                <div class="overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=600&q=80" alt="Interior Design" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-5">
                    <h4 class="font-bold text-base text-gray-900">Interior Design</h4>
                    <p class="text-xs text-gray-500 mt-1">Melbourne, Australia</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="inline-block bg-amber-600 text-white px-8 py-3.5 text-xs font-bold uppercase tracking-wider rounded shadow-md hover:bg-amber-700 transition">View All Projects</a>
        </div>
    </section>

</body>
</html>