<x-app-layout>
    <section>
        <div class="container w-9/12 mx-auto">
            <div class="container">
                    <div class="text-dark font-bold lg:text-5xl  text-3xl p-4 text-center wow fadeInDown">
                    Event Planner & Organizer
                    </div>
            </div>
            <div id="controls-carousel" class="relative w-full wow fadeInDown" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-72 mx-3">
                    @foreach (array_chunk($carouselProjectItems, 4) as $carouselChunk)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($carouselChunk as $item)
                            <div class="block w-full h-64 bg-cover bg-center rounded-lg shadow-lg relative bg-black bg-opacity-30 bg-blend-multiply transform hover:scale-105 motion-reduce:transform-none" style="background-image: url('{{ asset('storage/' . $item['image']) }}');">
                            <div class="absolute bottom-0 left-0 right-0 p-4 rounded-b-lg">
                                <h5 class="mb-2 text-md font-bold tracking-tight text-white text-center">{{ $item['title'] }}</h5>
                                <p class="font-normal text-gray-200 text-sm text-center">{{ $item['client'] }} - {{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}</p>
                            </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute lg:-top-8 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute lg:-top-8 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
    
    <!-- 
        <section>
            <div class="container w-9/12 mx-auto">
                <div class="container">
                        <div class="text-dark font-bold lg:text-5xl  text-3xl p-4 text-center wow fadeInDown">
                        Wedding Organizer
                        </div>
                </div>
                <div id="controls-carousel" class="relative w-full wow fadeInDown" data-carousel="static">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-72 mx-3">
                        @foreach (array_chunk($carouselWeddingItems, 4) as $carouselChunk)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            @foreach ($carouselChunk as $item)
                            <a href="#" class="block w-full max-w-sm h-64 bg-cover bg-center rounded-lg shadow-lg relative bg-black bg-opacity-30 bg-blend-multiply transform hover:scale-110 motion-reduce:transform-none " style="background-image: url('{{ $item['image'] }}');  ">
                            <div class="absolute bottom-0 left-0 right-0 p-4 rounded-b-lg">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-white text-center">{{ $item['title'] }}</h5>
                        <p class="font-normal text-gray-200 text-sm text-center">Kementrian PUPR - {{ $item['date'] }}</p>
                        </div>
                        </a>
                        @endforeach
                    </div>
                    </div>
                    @endforeach
                    </div>
                    <button type="button" class="absolute lg:-top-8 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute lg:-top-8 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container w-9/12 mx-auto">
                <div class="container">
                        <div class="text-dark font-bold lg:text-5xl  text-3xl p-4 text-center wow fadeInDown">
                        Graphic Designer & IT Solutions
                        </div>
                </div>
                <div id="controls-carousel" class="relative w-full wow fadeInDown" data-carousel="static">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-72 mx-3">
                        @foreach (array_chunk($carouselGraphicItems, 4) as $carouselChunk)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            @foreach ($carouselChunk as $item)
                            <a href="#" class="block w-full max-w-sm h-64 bg-cover bg-center rounded-lg shadow-lg relative bg-black bg-opacity-30 bg-blend-multiply transform hover:scale-110 motion-reduce:transform-none" style="background-image: url('{{ $item['image'] }}');  ">
                            <div class="absolute bottom-0 left-0 right-0 p-4 rounded-b-lg">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-white text-center">{{ $item['title'] }}</h5>
                        <p class="font-normal text-gray-200 text-sm text-center">Kementrian PUPR - {{ $item['date'] }}</p>
                        </div>
                        </a>
                        @endforeach
                    </div>
                    </div>
                    @endforeach
                    </div>
                    <button type="button" class="absolute lg:-top-8 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute lg:-top-8 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
    -->

    <section>
        <div class="container w-9/12 mx-auto">
            <div class="container">
                    <div class="text-dark font-bold lg:text-5xl  text-3xl p-4 text-center wow fadeInDown">
                    3D Moddeling & Rendering
                    </div>
            </div>
            <div id="controls-carousel" class="relative w-full wow fadeInDown" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-72 mx-3">
                    @foreach (array_chunk($carouselModellingItems, 4) as $carouselChunk)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($carouselChunk as $item)
                        <a href="#" class="block w-full max-w-sm h-64 bg-cover bg-center rounded-lg shadow-lg relative bg-black bg-opacity-30 bg-blend-multiply transform hover:scale-110 motion-reduce:transform-none" style="background-image: url('{{ asset('storage/' . $item['image']) }}');  ">
                        <div class="absolute bottom-0 left-0 right-0 p-4 rounded-b-lg">
                    <h5 class="mb-2 text-md font-bold tracking-tight text-white text-center">{{ $item['title'] }}</h5>
                    <p class="font-normal text-gray-200 text-sm text-center">{{ \Carbon\Carbon::parse($item['date'])->format('M Y') }}</p>
                    </div>
                    </a>
                    @endforeach
                </div>
                </div>
                @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute lg:-top-8 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute lg:-top-8 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container w-9/12 mx-auto">
            <div class="container">
                    <div class="text-dark font-bold lg:text-5xl  text-3xl p-4 text-center wow fadeInDown">
                    Partnership
                    </div>
            </div>
            <div id="default-carousel" class="container mx-auto mb-8 wow fadeInDown" data-carousel="slide">
              <!-- Carousel wrapper -->
              <div class="relative h-48 md:h-28 overflow-hidden rounded-lg mx-3 mt-8">
                @foreach (array_chunk($carouselPartnerItems, 8) as $carouselChunk)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid lg:grid-cols-8 grid-cols-4 gap-4">
                        @foreach ($carouselChunk as $item)
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="h-20 lg:h-28 object-contain transform hover:scale-105 motion-reduce:transform-none">
                        </div>
                        @endforeach
                    </div>
                    </div>
                @endforeach
              </div>
            </div>   
        </div>
    </section>
</x-app-layout>  