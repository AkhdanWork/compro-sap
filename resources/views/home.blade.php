<x-app-layout>
<section class="bg-cover bg-center h-auto bg-gray-700 bg-blend-multiply" style="background-image: url('{{ asset('img/event/peresmianinpres-min.jpg') }}');">
    <div class="px-4 mx-auto container w-9/12 text-left py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">SAP Enterprise <br> “One Stop Event Solution”</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">SAP Enterprise is a company engaged in MICE, event organizing, graphic design, and IT solution services. We aspire to become a leading company in this industry.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
            <a href="{{ route('about') }}" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
              Read More
              <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
            </a>  
        </div>
    </div>
</section>

<section class="bg-red-600">
    <div class="container w-9/12 mx-auto py-4">
      <h2 class="text-xl lg:text-4xl text-left text-white font-bold wow fadeInLeft">Why You Should Choose Us</h2>
    </div>
    <div class="bg-white py-12">
      <div class="container w-9/12 mx-auto grid lg:grid-cols-2 gap-8 wow fadeInDown">
        <div class="space-y-4">
          <div class="bg-red-700 rounded-xl text-white text-lg p-4 font-bold">01. Excellence</div>
          <p class="text-gray-700 px-4">We are committed to delivering high-quality services that meet and exceed industry standards.</p>
          <div class="bg-red-700 rounded-xl text-white text-lg p-4 font-bold">02. Integrity</div>
          <p class="text-gray-700 px-4">We conduct ourselves with honesty, transparency, and ethical practices in all aspects of our operations.</p>
          <div class="bg-red-700 rounded-xl text-white text-lg p-4 font-bold">03. Innovation</div>
          <p class="text-gray-700 px-4">We continuously seek new ideas, technologies, and approaches to deliver creative and impactful solutions to our clients.</p>
          <div class="bg-red-700 rounded-xl text-white text-lg p-4 font-bold">04. Teamwork</div>
          <p class="text-gray-700 px-4">By working together, we harness the collective expertise and creativity of our team to deliver outstanding results.</p>
        </div>
        <div>
          <img src="{{ asset('img/team/team.jpg') }}" alt="Cover Image" class="w-full h-full object-cover rounded-xl">
        </div>
      </div>
    </div>
</section>

<section class="bg-red-600">
    <div class="container w-9/12 mx-auto text-center py-4">
      <h2 class="text-xl lg:text-4xl text-right text-white font-bold wow fadeInRight">Project Showcase</h2>
    </div>
    <div class="bg-white py-12 ">
      <div class="container w-9/12 mx-auto wow fadeInDown">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
          <div class="relative h-56 overflow-hidden rounded-lg md:h-72 mx-4">
            @foreach (array_chunk($carouselProjectItems, 4) as $carouselChunk)
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                  @foreach ($carouselChunk as $item)
                    <div class="block w-full h-64 bg-cover bg-center rounded-lg shadow-lg relative bg-black bg-opacity-30 bg-blend-multiply transform hover:scale-105 motion-reduce:transform-none" style="background-image: url('{{ asset('storage/' . $item['image']) }}');">
                      <div class="absolute bottom-0 left-0 right-0 p-4 rounded-b-lg">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-white text-center">{{ $item['title'] }}</h5>
                        <p class="font-normal text-gray-200 text-sm text-center">{{ $item['client'] }} - {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}</p>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>
          <button type="button" class="absolute top-0 left-2 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 group-hover:bg-gray-200 group-focus:ring-4 group-focus:ring-gray-400">
              <svg class="w-4 h-4 text-gray-900 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
            </span>
          </button>
          <button type="button" class="absolute top-0 right-2 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 group-hover:bg-gray-200 group-focus:ring-4 group-focus:ring-gray-400">
              <svg class="w-4 h-4 text-gray-900 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
            </span>
          </button>
        </div>
      </div>
    </div>
</section>
<section class="bg-red-600">
  <div class="container w-9/12 mx-auto text-center py-4">
    <h2 class="text-xl lg:text-4xl text-left text-white font-bold wow fadeInLeft">Our Valued Partners</h2>
  </div>
  <div class="bg-white py-12">
    <div class="container w-9/12 mx-auto wow fadeInDown">
      <div id="default-carousel" class="container mx-auto mb-8" data-carousel="slide">
        <div class="relative h-48 md:h-28 overflow-hidden rounded-lg">
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
  </div>
</section>

</x-app-layout>
