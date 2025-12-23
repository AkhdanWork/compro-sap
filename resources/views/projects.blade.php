<x-app-layout>
<section class="relative bg-cover bg-center min-h-screen bg-gray-500 bg-blend-multiply 
                flex items-end justify-center text-center"
         style="background-image: url('{{ asset('img/team/team2.jpg') }}');">

    <div class="relative w-10/12 max-w-5xl mx-auto mb-16">

        <h1 style="line-height:1.25" class="text-3xl md:text-4xl lg:text-5xl font-semibold text-white leading-relaxed mb-20">
            Your Trusted Partner for <br>Professional Event Experiences
        </h1>

        <p class="text-sm md:text-base lg:text-lg text-gray-200 leading-relaxed">
SAP Enterprise is an Indonesian event and MICE agency specializing in delivering seamless, well-executed <br>events for brands, government institutions, and organizations across Indonesia.
        </p>

    </div>

</section>

<section class="bg-white py-16 lg:py-20">
    <div class="container w-9/12 mx-auto">
        <div class="grid lg:grid-cols-3 gap-8 lg:gap-12 items-center">
            <div class="relative bg-white p-8 lg:p-12 lg:col-span-1">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-2 h-2 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-wider">CASE STUDY</p>
                </div>

                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-semibold text-gray-900 leading-tight mb-6">
                    Behind the Scenes of Our Signature Works
                </h2>

                <p class="text-sm lg:text-sm text-gray-600 leading-relaxed mb-8">
                    See how we bring strategy, creativity, and technical execution together to deliver impactful event results.
                </p>

                <a href="{{ route('projects') }}"
                class="inline-flex items-center px-4 py-2 bg-red-600 text-white lg:text-sm font-medium rounded-full hover:bg-red-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 group">
                    Read Study Case
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 17L17 7M17 7H7M17 7V17"></path>
                    </svg>
                </a>
            </div>

            <div class="relative rounded-2xl overflow-hidden shadow-2xl group cursor-pointer
                        h-[400px] lg:h-[800px] lg:col-span-2">
                <img src="{{ asset('img/event/alamjadanniv-min.jpg') }}"
                    alt="Event Case Study"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition-all duration-300 flex items-center justify-center">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center
                                group-hover:scale-110 transition-transform duration-300 border-2 border-white">
                        <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-white py-16 lg:py-24" id="categories">
    <div class="container w-9/12 mx-auto">
        
        <div class="text-center mb-12">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <div class="w-2 h-2 bg-red-600"></div>
                <p class="text-gray-400 font-semibold text-sm uppercase tracking-wider">CATEGORIES</p>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6">
                Discover Our Work by Event Type
            </h2>
            <p class="text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                Browse projects across multiple segments to find inspiration tailored to your needs.
            </p>
            
            <div class="relative">
                <div class="flex items-center justify-center gap-3 overflow-x-auto pb-4 px-16 scrollbar-hide snap-x snap-mandatory">
                    <button onclick="filterProjects('all')" id="btn-all" class="px-6 py-2 bg-gradient-to-b from-red-400 via-red-500 to-red-600 text-white rounded-full font-semibold hover:bg-red-700 transition whitespace-nowrap snap-start flex-shrink-0">
                        All Projects
                    </button>
                    <button onclick="filterProjects('event')" id="btn-event" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-gray-200 transition whitespace-nowrap snap-start flex-shrink-0">
                        Event Organizer
                    </button>
                    <button onclick="filterProjects('wedding')" id="btn-wedding" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-gray-200 transition whitespace-nowrap snap-start flex-shrink-0">
                        Wedding
                    </button>
                    <button onclick="filterProjects('modelling')" id="btn-modelling" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-gray-200 transition whitespace-nowrap snap-start flex-shrink-0">
                        3D Modelling & Rendering
                    </button>
                    <button onclick="filterProjects('graphic')" id="btn-graphic" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full font-semibold hover:bg-gray-200 transition whitespace-nowrap snap-start flex-shrink-0">
                        Graphic Design
                    </button>
                </div>
            </div>
        </div>

        <div id="projects-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach($carouselProjectItems->take(2) as $item)
            <div class="group cursor-pointer" data-category="event">
                <div class="relative h-64 rounded-2xl overflow-hidden mb-2 shadow-lg">
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                    <span class="text-xs font-semibold text-red-600 uppercase tracking-widest">
                        EVENT ORGANIZER
                    </span>
                <h3 class="text-lg font-semibold text-gray-900 mb-1 group-hover:text-red-600 transition">
                    {{ $item['title'] }}
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ $item['client'] }} - {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                </p>
            </div>
            @endforeach

            @foreach($carouselWeddingItems->take(2) as $item)
            <div class="group cursor-pointer" data-category="wedding">
                <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="mb-3">
                    <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                        WEDDING
                    </span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                    {{ $item['title'] }}
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ $item['client'] }} - {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                </p>
            </div>
            @endforeach

            @foreach($carouselGraphicItems->take(2) as $item)
            <div class="group cursor-pointer" data-category="graphic">
                <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="mb-3">
                    <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                        GRAPHIC DESIGN
                    </span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                    {{ $item['title'] }}
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                </p>
            </div>
            @endforeach

            @foreach($carouselModellingItems->take(2) as $item)
            <div class="group cursor-pointer" data-category="modelling">
                <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                </div>
                <div class="mb-3">
                    <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                        3D MODELLING & RENDERING
                    </span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                    {{ $item['title'] }}
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                </p>
            </div>
            @endforeach

            <div id="event-projects" class="hidden col-span-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($carouselProjectItems as $item)
                    <div class="group cursor-pointer">
                        <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        </div>
                        <div class="mb-3">
                            <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                                EVENT ORGANIZER
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ $item['client'] }} - {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div id="wedding-projects" class="hidden col-span-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($carouselWeddingItems as $item)
                    <div class="group cursor-pointer">
                        <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        </div>
                        <div class="mb-3">
                            <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                                WEDDING
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ $item['client'] }} - {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div id="modelling-projects" class="hidden col-span-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($carouselModellingItems as $item)
                    <div class="group cursor-pointer">
                        <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        </div>
                        <div class="mb-3">
                            <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                                3D MODELLING & RENDERING
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div id="graphic-projects" class="hidden col-span-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($carouselGraphicItems as $item)
                    <div class="group cursor-pointer">
                        <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        </div>
                        <div class="mb-3">
                            <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                                GRAPHIC DESIGN
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects.all') }}" class="inline-flex items-center px-8 py-3 border-2 border-red-600 text-red-600 font-semibold rounded-full hover:bg-red-600 hover:text-white transition-all duration-300">
                See More
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16 lg:py-24" id="gallery">
    <div class="container w-9/12 mx-auto">
                <div class="grid lg:grid-cols-10 gap-8 lg:gap-12 mb-12 items-start">
            <div class="lg:col-span-5">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-1 p-1 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">GALLERY</p>
                </div>

                <h2 class="text-3xl lg:text-4xl font-semibold text-gray-900 leading-tight mt-2">
                    A Visual Showcase of Our Work
                </h2>
            </div>

            <div class="lg:col-span-5 flex flex-col h-full justify-end items-end">
                <p class="text-xs lg:text-xs text-gray-600 leading-relaxed text-right">
                    Explore highlights from the events we've crafted — from corporate gatherings 
                    and government programs to weddings and brand activations. Every photo 
                    reflects our commitment to detail, creativity, and seamless execution.
                </p>
            </div>
        </div>
        <div class="relative h-[500px] md:h-[550px] flex items-center justify-center mb-16" style="perspective: 2500px;">
            <button
                onclick="coverflowPrev()"
                class="absolute left-4 z-50 w-12 h-12 flex items-center justify-center bg-white rounded-full shadow-lg hover:bg-red-600 hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button
                onclick="coverflowNext()"
                class="absolute right-4 z-50 w-12 h-12 flex items-center justify-center bg-white rounded-full shadow-lg hover:bg-red-600 hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            <div class="relative w-full h-full flex items-center justify-center">
                <div class="relative w-full h-96" style="transform-style: preserve-3d;">
                    @if(isset($carouselProjectItems[0]))
                    <div class="coverflow-card group cursor-pointer absolute w-72 h-96 rounded-2xl overflow-hidden shadow-2xl transition-all duration-700 ease-out" 
                        onclick="coverflowGoTo(0)"
                        style="transform-style: preserve-3d; left: 50%; top: 50%; margin-left: -144px; margin-top: -192px; transform: translateX(0) translateY(0) translateZ(0) scale(0.5) rotateX(0deg) rotateY(0deg); opacity: 0;">
                        <img src="{{ asset('storage/' . $carouselProjectItems[0]['image']) }}" 
                             alt="{{ $carouselProjectItems[0]['title'] }}" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1.5 bg-red-600 text-white text-xs font-semibold rounded-full uppercase">
                                Corporate Event
                            </span>
                        </div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-medium mb-2">
                                {{ $carouselProjectItems[0]['title'] }}
                            </h3>
                            <p class="text-sm text-gray-200">
                                {{ $carouselProjectItems[0]['client'] }}
                            </p>
                        </div>
                    </div>
                    @endif

                    @if(isset($carouselProjectItems[1]))
                    <div class="coverflow-card group cursor-pointer absolute w-72 h-96 rounded-2xl overflow-hidden shadow-2xl transition-all duration-700 ease-out" 
                        onclick="coverflowGoTo(1)"
                        style="transform-style: preserve-3d; left: 50%; top: 50%; margin-left: -144px; margin-top: -192px; transform: translateX(0) translateY(0) translateZ(0) scale(0.5) rotateX(0deg) rotateY(0deg); opacity: 0;">
                        <img src="{{ asset('storage/' . $carouselProjectItems[1]['image']) }}" 
                             alt="{{ $carouselProjectItems[1]['title'] }}" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1.5 bg-red-600 text-white text-xs font-semibold rounded-full uppercase">
                                Corporate Event
                            </span>
                        </div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-medium mb-2">
                                {{ $carouselProjectItems[1]['title'] }}
                            </h3>
                            <p class="text-sm text-gray-200">
                                {{ $carouselProjectItems[1]['client'] }}
                            </p>
                        </div>
                    </div>
                    @endif

                    @if(isset($carouselProjectItems[2]))
                    <div class="coverflow-card group cursor-pointer absolute w-72 h-96 rounded-2xl overflow-hidden shadow-2xl transition-all duration-700 ease-out" 
                        onclick="coverflowGoTo(2)"
                        style="transform-style: preserve-3d; left: 50%; top: 50%; margin-left: -144px; margin-top: -192px; transform: translateX(0) translateY(0) translateZ(0) scale(0.5) rotateX(0deg) rotateY(0deg); opacity: 0;">
                        <img src="{{ asset('storage/' . $carouselProjectItems[2]['image']) }}" 
                             alt="{{ $carouselProjectItems[2]['title'] }}" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute top-6 left-6">
                            <span class="px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-full uppercase tracking-wider">
                                Corporate Event
                            </span>
                        </div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                            <h3 class="text-lg font-medium mb-3">
                                {{ $carouselProjectItems[2]['title'] }}
                            </h3>
                            <p class="text-base text-gray-200">
                                {{ $carouselProjectItems[2]['client'] }} — {{ \Carbon\Carbon::parse($carouselProjectItems[2]['date'])->format('M Y') }}
                            </p>
                        </div>
                    </div>
                    @endif

                    @if(isset($carouselWeddingItems[0]))
                    <div class="coverflow-card group cursor-pointer absolute w-72 h-96 rounded-2xl overflow-hidden shadow-2xl transition-all duration-700 ease-out" 
                        onclick="coverflowGoTo(3)"
                        style="transform-style: preserve-3d; left: 50%; top: 50%; margin-left: -144px; margin-top: -192px; transform: translateX(0) translateY(0) translateZ(0) scale(0.5) rotateX(0deg) rotateY(0deg); opacity: 0;">
                        <img src="{{ asset('storage/' . $carouselWeddingItems[0]['image']) }}" 
                             alt="{{ $carouselWeddingItems[0]['title'] }}" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1.5 bg-red-600 text-white text-xs font-semibold rounded-full uppercase">
                                Wedding
                            </span>
                        </div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-medium mb-2">
                                {{ $carouselWeddingItems[0]['title'] }}
                            </h3>
                            <p class="text-sm text-gray-200">
                                {{ $carouselWeddingItems[0]['client'] }}
                            </p>
                        </div>
                    </div>
                    @endif

                    @if(isset($carouselWeddingItems[1]))
                    <div class="coverflow-card group cursor-pointer absolute w-72 h-96 rounded-2xl overflow-hidden shadow-2xl transition-all duration-700 ease-out" 
                        onclick="coverflowGoTo(4)"
                        style="transform-style: preserve-3d; left: 50%; top: 50%; margin-left: -144px; margin-top: -192px; transform: translateX(0) translateY(0) translateZ(0) scale(0.5) rotateX(0deg) rotateY(0deg); opacity: 0;">
                        <img src="{{ asset('storage/' . $carouselWeddingItems[1]['image']) }}" 
                             alt="{{ $carouselWeddingItems[1]['title'] }}" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1.5 bg-red-600 text-white text-xs font-semibold rounded-full uppercase">
                                Wedding
                            </span>
                        </div>
                        
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-medium mb-2">
                                {{ $carouselWeddingItems[1]['title'] }}
                            </h3>
                            <p class="text-sm text-gray-200">
                                {{ $carouselWeddingItems[1]['client'] }}
                            </p>
                        </div>
                    </div>
                    @endif

                </div>
            </div>

            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex justify-center items-center gap-2 z-50">
                <button onclick="coverflowGoTo(0)" class="coverflow-dot w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"></button>
                <button onclick="coverflowGoTo(1)" class="coverflow-dot w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"></button>
                <button onclick="coverflowGoTo(2)" class="coverflow-dot w-8 h-2 bg-red-600 rounded-full transition-all duration-300"></button>
                <button onclick="coverflowGoTo(3)" class="coverflow-dot w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"></button>
                <button onclick="coverflowGoTo(4)" class="coverflow-dot w-2 h-2 bg-gray-300 rounded-full transition-all duration-300"></button>
            </div>

        </div>

    </div>
</section>

<section class="w-full py-12 px-6 bg-white">
    <div class="w-10/12 mx-auto">
        <div class="rounded-3xl bg-gradient-to-b from-red-400 via-red-500 to-red-600 text-center py-20 px-6">

            <h2 class="text-3xl lg:text-5xl font-medium text-white mb-4">
                Ready to Create an Impactful Event?
            </h2>

            <p class="text-white/80 max-w-5xl mx-auto text-sm lg:text-base mb-10 text-white">
                Let’s bring your vision to life with professional planning, creative storytelling, and seamless execution from our dedicated team.
            </p>

            <a href="#"
               class="inline-flex items-center gap-2 bg-white text-red-600 font-semibold py-3 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                Start Your Project
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                </svg>
            </a>

        </div>
    </div>
</section>


<script>
    document.querySelectorAll('.faq-item').forEach((item) => {
            const btn = item.querySelector('.faq-btn');
            const content = item.querySelector('.faq-content');
            const icon = item.querySelector('.faq-icon');
            const title = item.querySelector('.faq-title');

            btn.addEventListener('click', () => {

                document.querySelectorAll('.faq-item').forEach((other) => {
                    if (other !== item) {
                        const oc = other.querySelector('.faq-content');
                        const oi = other.querySelector('.faq-icon');
                        const ot = other.querySelector('.faq-title');

                        oc.classList.add('hidden');
                        oi.classList.remove('rotate-180');
                        ot.classList.remove('text-red-600');

                        other.classList.remove('border-t-2', 'border-t-red-600', 'bg-gray-50');
                    }
                });

                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
                title.classList.toggle('text-red-600');

                if (!content.classList.contains('hidden')) {
                    item.classList.add('border-t-2', 'border-t-red-600', 'bg-gray-50');
                } else {
                    item.classList.remove('border-t-2', 'border-t-red-600', 'bg-gray-50');
                }
            });
    });

    function filterProjects(category) {
        const buttons = ['all', 'event', 'wedding', 'modelling', 'graphic'];
        buttons.forEach(btn => {
            const button = document.getElementById('btn-' + btn);
            if (btn === category) {
                button.classList.remove('bg-gray-100', 'text-gray-700');
                button.classList.add('bg-gradient-to-b', 'from-red-400', 'via-red-500', 'to-red-600', 'text-white');
            } else {
                button.classList.remove('bg-gradient-to-b', 'from-red-400', 'via-red-500', 'to-red-600', 'text-white');
                button.classList.add('bg-gray-100', 'text-gray-700');
            }
        });

        const allItems = document.querySelectorAll('[data-category]');
        const eventSection = document.getElementById('event-projects');
        const weddingSection = document.getElementById('wedding-projects');
        const modellingSection = document.getElementById('modelling-projects');
        const graphicSection = document.getElementById('graphic-projects');

        if (category === 'all') {
            allItems.forEach(item => item.classList.remove('hidden'));
            eventSection.classList.add('hidden');
            weddingSection.classList.add('hidden');
            modellingSection.classList.add('hidden');
            graphicSection.classList.add('hidden');
        } else {
            allItems.forEach(item => item.classList.add('hidden'));
            eventSection.classList.add('hidden');
            weddingSection.classList.add('hidden');
            modellingSection.classList.add('hidden');
            graphicSection.classList.add('hidden');

            if (category === 'event') {
                eventSection.classList.remove('hidden');
            } else if (category === 'wedding') {
                weddingSection.classList.remove('hidden');
            } else if (category === 'modelling') {
                modellingSection.classList.remove('hidden');
            } else if (category === 'graphic') {
                graphicSection.classList.remove('hidden');
            }
        }
    }

    let coverflowActive = 2;
    const coverflowTotal = 5;
    let coverflowAutoplayInterval;

function updateCoverflow() {
    const cards = document.querySelectorAll('.coverflow-card');
    const dots = document.querySelectorAll('.coverflow-dot');
    
    const isMobile = window.innerWidth < 768;
    
    // PENTING: Force browser reflow dulu
    cards.forEach(card => {
        card.style.transition = 'none';
        void card.offsetHeight; // Force reflow
        card.style.transition = 'all 0.7s ease-out';
    });
    
    cards.forEach((card, i) => {
        const offset = i - coverflowActive;
        let transform, z, opacity, brightness;
        
        if (isMobile) {
            // ===== MOBILE VIEW =====
            switch(offset) {
                case 0:
                    transform = 'translateX(0) translateY(0) translateZ(60px) scale(0.65) rotateX(12deg) rotateY(0deg)';
                    z = '50'; opacity = '1'; brightness = '1';
                    break;
                    
                case -1:
                    transform = 'translateX(-180px) translateY(0) translateZ(10px) scale(0.45) rotateX(12deg) rotateY(15deg)';
                    z = '45'; opacity = '0.85'; brightness = '0.88';
                    break;
                    
                case 1:
                    transform = 'translateX(180px) translateY(0) translateZ(10px) scale(0.45) rotateX(12deg) rotateY(-15deg)';
                    z = '45'; opacity = '0.85'; brightness = '0.88';
                    break;
                    
                case -2:
                    transform = 'translateX(-350px) translateY(0) translateZ(-150px) scale(0.3) rotateX(12deg) rotateY(25deg)';
                    z = '20'; opacity = '0'; brightness = '0.5';
                    break;
                    
                case 2:
                    transform = 'translateX(350px) translateY(0) translateZ(-150px) scale(0.3) rotateX(12deg) rotateY(-25deg)';
                    z = '20'; opacity = '0'; brightness = '0.5';
                    break;
                    
                default:
                    transform = `translateX(${offset * 400}px) translateY(0) translateZ(-200px) scale(0.25) rotateX(12deg) rotateY(${offset > 0 ? '-30deg' : '30deg'})`;
                    z = '10'; opacity = '0'; brightness = '0.5';
            }
            
        } else {
            // ===== DESKTOP VIEW =====
            switch(offset) {
                case 0:
                    transform = 'translateX(0) translateY(0) translateZ(100px) scale(1.1) rotateX(15deg) rotateY(0deg)';
                    z = '50'; opacity = '1'; brightness = '1';
                    break;
                    
                case -1:
                    transform = 'translateX(-290px) translateY(0) translateZ(20px) scale(0.75) rotateX(15deg) rotateY(12deg)';
                    z = '45'; opacity = '0.9'; brightness = '0.9';
                    break;
                    
                case 1:
                    transform = 'translateX(290px) translateY(0) translateZ(20px) scale(0.75) rotateX(15deg) rotateY(-12deg)';
                    z = '45'; opacity = '0.9'; brightness = '0.9';
                    break;
                    
                case -2:
                    transform = 'translateX(-560px) translateY(0) translateZ(-80px) scale(0.90) rotateX(15deg) rotateY(18deg)';
                    z = '30'; opacity = '0.75'; brightness = '0.85';
                    break;
                    
                case 2:
                    transform = 'translateX(560px) translateY(0) translateZ(-80px) scale(0.90) rotateX(15deg) rotateY(-18deg)';
                    z = '30'; opacity = '0.75'; brightness = '0.85';
                    break;
                    
                default:
                    transform = `translateX(${offset * 700}px) translateY(0) translateZ(-150px) scale(0.65) rotateX(15deg) rotateY(${offset > 0 ? '-25deg' : '25deg'})`;
                    z = '10'; opacity = '0.5'; brightness = '0.7';
            }
        }
        
        // Apply dengan requestAnimationFrame untuk smooth rendering
        card.style.willChange = 'transform, opacity';
        card.style.transform = transform;
        card.style.zIndex = z;
        card.style.opacity = opacity;
        card.style.filter = `brightness(${brightness})`;

        // Clear will-change after animation
        setTimeout(() => {
            card.style.willChange = 'auto';
        }, 700);
    });
    
    // Update dots
    dots.forEach((dot, i) => {
        dot.className = i === coverflowActive 
            ? 'coverflow-dot w-8 h-2 bg-red-600 rounded-full transition-all duration-300'
            : 'coverflow-dot w-2 h-2 bg-gray-300 rounded-full transition-all duration-300';
    });
}

    function coverflowNext() {
        coverflowActive = (coverflowActive + 1) % coverflowTotal;
        updateCoverflow();
        resetCoverflowAutoplay();
    }

    function coverflowPrev() {
        coverflowActive = (coverflowActive - 1 + coverflowTotal) % coverflowTotal;
        updateCoverflow();
        resetCoverflowAutoplay();
    }

    function coverflowGoTo(index) {
        coverflowActive = index;
        updateCoverflow();
        resetCoverflowAutoplay();
    }

    function startCoverflowAutoplay() {
        coverflowAutoplayInterval = setInterval(() => {
            coverflowNext();
        }, 5000);
    }

    function resetCoverflowAutoplay() {
        clearInterval(coverflowAutoplayInterval);
        startCoverflowAutoplay();
    }

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        updateCoverflow();
        startCoverflowAutoplay();
    }, 100);
});

// Juga update saat window resize
window.addEventListener('resize', () => {
    updateCoverflow();
});
</script>
</x-app-layout>