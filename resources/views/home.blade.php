<x-app-layout>
<section class="bg-cover bg-center min-h-screen bg-gray-500 bg-blend-multiply flex items-end" style="background-image: url('{{ asset('img/event/peresmianinpres-min.jpg') }}');">
    <div class="px-4 mx-auto container w-11/12 lg:w-9/12 py-12 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-end">
            
            <div class="space-y-0 lg:space-y-6">
                <h1 style="line-height:1.25" class="text-2xl md:text-5xl lg:text-5xl xl:text-6xl font-semibold tracking-tight leading-tight text-white">
                    One Stop<br>
                    Event Solution
                </h1>
            </div>

            <div class="space-y-6 lg:space-y-8">
                <p class="text-base lg:text-xl text-gray-200 leading-relaxed">
                    We provide full-scope event, MICE, creative, and technical services to ensure seamless coordination and impactful results for every occasion.
                </p>

                <div class="flex flex-row gap-4">
                    <a href="#contact" class="group inline-flex items-center justify-center px-3 lg:px-4 py-1 lg:py-2 bg-red text-white font-medium lg:font-bold text-sm lg:text-base rounded-full hover:bg-white hover:text-red-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span class="hidden lg:inline">Start Your Project</span>
                        <span class="lg:hidden">Start Project</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                        </svg>
                    </a>

                    <a href="{{ route('projects') }}" class="group inline-flex items-center justify-center px-3 lg:px-4 py-1 lg:py-2 bg-transparent text-white font-medium lg:font-bold text-sm lg:text-base rounded-full border-2 border-white hover:bg-white hover:text-red-600 transition-all duration-300 transform hover:-translate-y-1">
                        View Portfolio
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
  <div class="bg-white pt-6" id="partners">
    <div class="container   w-10/12 lg:w-9/12 mx-auto wow fadeInDown">
      <h5 class="text-lg lg:text-2xl text-center text-black font-bold wow fadeInTop">Trusted by Leading Brands and Institutions</h5>
      <div id="default-carousel" class="container mx-auto pt-6" data-carousel="slide">
        <div class="relative h-20 lg:h-48 overflow-hidden rounded-lg">
          <div class="block lg:hidden">
                @foreach (array_chunk($carouselPartnerItems, 4) as $carouselChunk)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($carouselChunk as $item)
                        <div class="flex justify-center items-center">
                            <img
                            src="{{ asset('storage/' . $item['image']) }}"
                            alt="{{ $item['title'] }}"
                            class="h-10 object-contain"
                            >
                        </div>
                        @endforeach
                    </div>
                    </div>
                @endforeach
          </div>
        <div class="hidden lg:block">
        @foreach (array_chunk($carouselPartnerItems, 8) as $carouselChunk)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="grid grid-cols-8 gap-6">
                @foreach ($carouselChunk as $item)
                <div class="flex justify-center items-center">
                    <img
                    src="{{ asset('storage/' . $item['image']) }}"
                    alt="{{ $item['title'] }}"
                    class="h-16 object-contain"
                    >
                </div>
                @endforeach
            </div>
            </div>
        @endforeach
        </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-50 py-12 lg:py-24" id="aboutUs">
    <div class="container w-10/12 lg:w-9/12 mx-auto">
        <div class="grid lg:grid-cols-10 gap-6 lg:gap-12 items-start mb-6 lg:mb-16">
            <div class="lg:col-span-6">
                <div class="flex items-center space-x-2">
                    <span class="w-2 h-2 bg-red-600 inline-block"></span>
                    <p class="text-gray-400 font-semibold text-xs uppercase tracking-widest">
                        About Us
                    </p>
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 leading-snug mt-3">
                    Building Events That Move People
                </h2>
            </div>

            <div class="lg:col-span-4">
                <p class="text-sm lg:text-base text-gray-600 leading-relaxed">
                    We provide complete event and MICE services supported by creative, production, and technical expertise.
                </p>

                <div class="flex lg:justify-end mt-4">
                    <a href="{{ route('about') }}"
                       class="inline-flex items-center gap-2 px-5 py-2 bg-red-600 text-white text-sm rounded-full
                              hover:bg-red-700 transition-all duration-300 shadow hover:shadow-lg">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-6 lg:gap-14 items-start">

            <div class="relative rounded-2xl overflow-hidden shadow-xl
                        h-[260px] sm:h-[340px] lg:h-[420px]">

                <img src="{{ asset('img/team/team.jpg') }}"
                     alt="SAP Enterprise Team"
                     class="absolute inset-0 w-full h-full object-cover">

                <div class="absolute inset-x-0 bottom-0
                            bg-gradient-to-t from-black/90 via-black/70 to-transparent
                            p-4 sm:p-5
                            max-h-[70%] overflow-y-auto">

                    <p class="text-white text-xs sm:text-sm lg:text-base leading-relaxed text-justify">
                        SAP Enterprise is an Indonesian event and MICE agency specializing in planning,
                        coordinating, and executing professional events for brands, institutions, and organizations.
                        Operating under PT Setia Alfa Perkasa Enterprise, we deliver reliable, detail-driven
                        solutions from concept to completion.
                    </p>
                </div>
            </div>

            <div class="flex flex-row lg:flex-col justify-between gap-8 lg:gap-10 items-center lg:items-start">
                <div>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-900">
                        <span class="text-red-600">+</span>300
                    </h3>
                    <p class="text-xs text-center lg:text-start sm:text-base lg:text-lg text-gray-600 mt-2">
                        Completed Events Across Indonesia
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl text-center lg:text-start font-semibold text-gray-900">
                        <span class="text-red-600">+</span>10
                    </h3>
                    <p class="text-xs text-center lg:text-start sm:text-base lg:text-lg text-gray-600 mt-2">
                        Years of Experience in Event & MICE Industry
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl text-center lg:text-start sm:text-4xl lg:text-5xl font-semibold text-gray-900">
                        <span class="text-red-600">+</span>50
                    </h3>
                    <p class="text-xs text-center lg:text-start sm:text-base lg:text-lg text-gray-600 mt-2">
                        Government, Corporate, and Organizational Clients
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="bg-white py-12 lg:py-24" id ="ourValues">
    <div class="container w-10/12 lg:w-9/12 mx-auto">
        
        <div class="text-center mb-6 lg:mb-16">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <div class="w-1 h-1 p-1 bg-red-600"></div>
                <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">OUR VALUES</p>
            </div>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 mb-6">
                The Principles That Shape Our Work
            </h2>

            <p class="text-sm lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We uphold a set of values that guide every project—from planning to execution—to ensure professionalism, consistency, and excellence in every event we deliver.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 lg:gap-8">
            <div class="group border border-gray-100 rounded-2xl p-3 lg:p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                <div class="w-12 lg:w-16 h-12 lg:h-16 mb-2 lg:mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>

                <h3 class="text-lg lg:text-2xl font-bold text-gray-900 mb-2 lg:mb-3">Excellence</h3>
                <p class="text-xs lg:text-base text-gray-600 leading-relaxed">
                    We commit to delivering high-quality results through precise planning, strong coordination, and attention to detail.
                </p>
            </div>

            <div class="group border border-gray-100 rounded-2xl p-3 lg:p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                <div class="w-12 lg:w-16 h-12 lg:h-16 mb-2 lg:mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>

                <h3 class="text-lg lg:text-2xl font-bold text-gray-900 mb-2 lg:mb-3">Integrity</h3>
                <p class="text-xs lg:text-base text-gray-600 leading-relaxed">
                    We build trust through transparency, responsibility, and ethical practices in every client engagement.
                </p>
            </div>

            <div class="group border border-gray-100 rounded-2xl p-3 lg:p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">      
                <div class="w-12 lg:w-16 h-12 lg:h-16 mb-2 lg:mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                
                <h3 class="text-lg lg:text-2xl font-bold text-gray-900 mb-2 lg:mb-3">Innovation</h3>
                <p class="text-xs lg:text-base text-gray-600 leading-relaxed">
                    We embrace creativity and new ideas to deliver events that are fresh, modern, and relevant to evolving industry needs.
                </p>
            </div>

            <div class="group border border-gray-100 rounded-2xl p-3 lg:p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                
                <div class="w-12 lg:w-16 h-12 lg:h-16 mb-2 lg:mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                
                <h3 class="text-lg lg:text-2xl font-bold text-gray-900 mb-2 lg:mb-3">Collaboration</h3>
                <p class="text-xs lg:text-base text-gray-600 leading-relaxed">
                    We work closely with clients, partners, and teams to ensure seamless execution and unified outcomes.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="bg-gray-50 py-12 lg:py-24" id="ourServices">
    <div class="containe w-10/12 lg:w-9/12 mx-auto">
        
        <div class="grid lg:grid-cols-12 gap-2 lg:gap-16">
            
            <div class="lg:col-span-5">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-2 h-2 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">OUR SERVICES</p>
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 leading-tight mb-4">
                    Comprehensive Solutions for Every Event Need
                </h2>

                <p class="text-sm sm:text-sm text-gray-600 leading-relaxed">
                    We offer integrated services that cover every stage of your event from planning and creative development to production, technology, and equipment support.
                </p>
            </div>

            <div class="lg:col-span-7">
                
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-2 lg:p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-lg lg:text-2xl font-bold text-red-600">Event Planner & Organizer</h3>
                        <span class="text-red-600 font-semibold text-md">// 01</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6">
                        <div class="grid md:grid-cols-2 gap-2 lg:gap-6">
                            <div class="rounded-xl overflow-hidden">
                                <img src="{{ asset('img/event/peresmianinpres-min.jpg') }}" alt="Event Planner" class="w-full h-48 object-cover">
                            </div>

                            <div class="flex flex-col justify-between space-y-4">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We design and execute tailored events that align with your goals. With strong creativity, precise coordination, and reliable planning, our team ensures every event is delivered smoothly and successfully.
                                </p>

                                <div>
                                    <a href="{{ route('service') }}" class="inline-flex items-center justify-center px-2 lg:px-5 py-1 lg:py-2.5 border-2 border-red-600 text-red-600 font-semibold text-sm rounded-full hover:bg-red-600 hover:text-white transition-all duration-300 group">
                                        Learn More
                                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-2 lg:p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-lg lg:text-2xl font-semibold text-gray-700">Wedding Organizer</h3>
                        <span class="text-gray-400 font-semibold text-md">// 02</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <div class="grid md:grid-cols-2 gap-2 lg:gap-6">
                            <div class="rounded-xl overflow-hidden">
                                <img src="{{ asset('img/event/pelantikanbanom-min.jpg') }}" alt="Wedding Organizer" class="w-full h-48 object-cover">
                            </div>
                            <div class="flex flex-col justify-between space-y-4">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We create unforgettable weddings with personalized themes, flawless coordination, and attention to every detail.
                                </p>
                                <div>
                                    <a href="{{ route('service') }}" class="inline-flex items-center justify-center px-2 lg:px-5 py-1 lg:py-2.5 border-2 border-red-600 text-red-600 font-semibold text-sm rounded-full hover:bg-red-600 hover:text-white transition-all duration-300 group">
                                        Learn More
                                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-2 lg:p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-lg lg:text-2xl font-semibold text-gray-700">3D Modelling & Rendering</h3>
                        <span class="text-gray-400 font-semibold text-md">// 03</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <p class="text-gray-600 text-sm">3D visualization and rendering services for events.</p>
                    </div>
                </div>

                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-2 lg:p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-lg lg:text-2xl font-semibold text-gray-700">Graphic Design & IT Solutions</h3>
                        <span class="text-gray-400 font-semibold text-md">// 04</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <p class="text-gray-600 text-sm">Creative design and technology solutions.</p>
                    </div>
                </div>

                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-2 lg:p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-lg lg:text-2xl font-semibold text-gray-700">Branding & Advertising</h3>
                        <span class="text-gray-400 font-semibold text-md">// 05</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <p class="text-gray-600 text-sm">Strategic branding and advertising campaigns.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section class="bg-white py-12 lg:py-24" id="whyChooseUs">
    <div class="containe w-10/12 lg:w-9/12 mx-auto">
        
        <div class="text-center mb-6 lg:mb-16">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <div class="w-1 h-1 p-1 bg-red-600"></div>
                <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">WHY CHOOSE US</p>
            </div>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 mb-6">
                What Makes SAP Enterprise Different
            </h2>
            <p class="text-sm lg:text-base text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We deliver professional, reliable, and complete event solutions backed by strong expertise, proven experience, and a dedicated team.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 sm:gap-6 lg:gap-12 mb-10 lg:mb-16">

            <div class="group border border-gray-100 rounded-xl lg:rounded-2xl overflow-hidden
                        hover:border-red-300 transition-all duration-300 hover:shadow-lg">

                <div class="p-3 sm:p-4 lg:p-6">
                    <img src="{{ asset('img/team/team4.jpg') }}"
                        alt="End-to-End Event Capability"
                        class="rounded-lg lg:rounded-2xl w-full
                                h-32 sm:h-40 lg:h-64
                                object-cover transition-transform duration-300 group-hover:scale-105">
                </div>

                <div class="border-t border-gray-100"></div>

                <div class="p-3 sm:p-4 lg:p-6">
                    <h3 class="text-sm sm:text-base lg:text-2xl font-semibold text-gray-900 mb-2">
                        End-to-End Event Capability
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed line-clamp-3">
                        We manage every stage of your event—planning, design, production, and technical support.
                    </p>
                </div>
            </div>

            <div class="group border border-gray-100 rounded-xl lg:rounded-2xl overflow-hidden
                        hover:border-red-300 transition-all duration-300 hover:shadow-lg">

                <div class="p-3 sm:p-4 lg:p-6">
                    <img src="{{ asset('img/team/team4.jpg') }}"
                        alt="Experienced Team You Can Rely On"
                        class="rounded-lg lg:rounded-2xl w-full
                                h-32 sm:h-40 lg:h-64
                                object-cover transition-transform duration-300 group-hover:scale-105">
                </div>

                <div class="border-t border-gray-100"></div>

                <div class="p-3 sm:p-4 lg:p-6">
                    <h3 class="text-sm sm:text-base lg:text-2xl font-semibold text-gray-900 mb-2">
                        Experienced Team You Can Rely On
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed line-clamp-3">
                        Our planners, creatives, and technical crew bring years of experience across industries.
                    </p>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-center">
            <div>
                <h3 class="text-lg sm:text-xl lg:text-4xl font-bold text-gray-900 mb-3 leading-tight">
                    Proven Track Record<br class="hidden sm:block"> Across Indonesia
                </h3>

                <p class="text-xs sm:text-sm lg:text-lg text-gray-600 leading-relaxed mb-4 sm:mb-6 line-clamp-4">
                    Hundreds of successful events reflect our commitment to quality, reliability,
                    and client satisfaction.
                </p>

                <a href="#contact"
                class="inline-flex items-center gap-2
                        px-4 sm:px-5 py-2 sm:py-3
                        bg-red-600 text-white
                        text-xs sm:text-sm lg:text-base
                        font-semibold rounded-full
                        hover:bg-red-700 transition-all duration-300
                        shadow hover:shadow-lg">
                    <span class="hidden lg:inline">Start Your Project</span>
                    <span class="lg:hidden">Start</span>
                    <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>
            <div class="border border-gray-100 rounded-xl lg:rounded-2xl p-2 sm:p-3 lg:p-6
                        hover:border-red-300 transition-all duration-300 hover:shadow-lg">

                <div class="rounded-lg lg:rounded-2xl overflow-hidden">
                    <img src="{{ asset('img/team/team4.jpg') }}"
                        alt="Proven Track Record"
                        class="w-full
                                h-48 sm:h-64 lg:h-96
                                object-cover">
                </div>
            </div>
        </div>


    </div>
</section>

<section class="bg-gray-50 py-12 lg:py-24" id="ourPortfolio">
    <div class="container w-10/12 lg:w-9/12 mx-auto">

        <div class="grid lg:grid-cols-10 gap-2 lg:gap-12 mb-6 lg:mb-16 items-start">
            <div class="lg:col-span-5">
                <div class="flex items-center space-x-2">
                    <span class="w-2 h-2 bg-red-600 inline-block"></span>
                    <p class="text-gray-400 font-semibold text-xs uppercase tracking-widest">
                        Our Portfolio
                    </p>
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 leading-snug mt-3">
                    Showcasing Events We’ve Successfully Delivered
                </h2>
            </div>

            <div class="lg:col-span-2"></div>

            <div class="lg:col-span-3 flex items-end">
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-left lg:text-right">
                    We take pride in delivering impactful events for government institutions,
                    organizations, and leading brands across Indonesia.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 lg:gap-6 mb-6">
            <div class="bg-white border border-gray-200 rounded-xl lg:rounded-2xl p-4 lg:p-6 flex flex-col shadow hover:border-red-300 hover:shadow-lg transition-all">
                <span class="inline-flex items-center justify-center px-3 py-1 bg-red-50 text-red-500 font-semibold text-xs sm:text-sm rounded-full w-fit">
                    Corporate Conference
                </span>

                <h3 class="text-sm sm:text-base lg:text-xl font-bold text-gray-900 mt-4 mb-2">
                    Annual Leadership Summit 2024
                </h3>

                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed line-clamp-3">
                    A large-scale corporate summit featuring keynote sessions,
                    leadership workshops, and a full-stage production setup.
                </p>

                <div class="mt-auto pt-4">
                    <a href="#contact"
                       class="inline-flex items-center gap-2 text-red-500 font-semibold text-xs sm:text-sm
                              hover:bg-red-600 hover:text-white px-3 py-1 rounded-full transition-all">
                        View Project
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="rounded-xl lg:rounded-2xl overflow-hidden shadow hover:shadow-lg transition-all">
                <img src="{{ asset('img/team/team4.jpg') }}"
                     class="w-full h-48 sm:h-64 lg:h-96 object-cover"
                     alt="Portfolio Image">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 lg:gap-6">
            <div class="rounded-xl lg:rounded-2xl overflow-hidden shadow hover:shadow-lg transition-all">
                <img src="{{ asset('img/team/team4.jpg') }}"
                     class="w-full h-48 sm:h-64 lg:h-96 object-cover"
                     alt="Portfolio Image">
            </div>

            <div class="bg-white border border-gray-200 rounded-xl lg:rounded-2xl p-4 lg:p-6 flex flex-col shadow hover:border-red-300 hover:shadow-lg transition-all">
                <span class="inline-flex items-center justify-center px-3 py-1 bg-red-50 text-red-500 font-semibold text-xs sm:text-sm rounded-full w-fit">
                    Government Event
                </span>

                <h3 class="text-sm sm:text-base lg:text-xl font-bold text-gray-900 mt-4 mb-2">
                    Kementerian PUPR – National Infrastructure Forum
                </h3>

                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed line-clamp-3">
                    A formal government forum supported with full event planning,
                    stage design, technical production, and protocol management.
                </p>

                <div class="mt-auto pt-4">
                    <a href="#contact"
                       class="inline-flex items-center gap-2 text-red-500 font-semibold text-xs sm:text-sm
                              hover:bg-red-600 hover:text-white px-3 py-1 rounded-full transition-all">
                        View Project
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-6 lg:mt-12">
            <a href="#projects"
               class="inline-flex items-center gap-2 px-6 sm:px-8 py-3
                      border-2 border-red-600 text-red-600
                      font-semibold text-sm sm:text-base rounded-full
                      hover:bg-red-600 hover:text-white hover:shadow-lg transition-all">
                View More Projects
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 17L17 7M17 7H7M17 7V17"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<section class="w-full py-12 lg:py-24 px-4 sm:px-6 bg-gradient-to-b from-red-400 via-red-500 to-red-600" id="qoutes">
    <div class="w-full sm:w-10/12 lg:w-9/12 mx-auto">
        <div id="testimonial-carousel" class="relative">

            <div class="relative overflow-hidden">
                <div class="testimonial-slides flex transition-transform duration-500 ease-in-out">

                    <div class="testimonial-slide min-w-full">
                        <div class="rounded-3xl px-6 py-10 sm:p-10 lg:p-16 text-white relative">

                            <div class="mb-6 opacity-90 w-8 h-8 sm:w-10 sm:h-10">
                                <svg fill="#ffffff" viewBox="0 0 8 8">
                                    <path d="M0 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3zm5 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3z" transform="translate(0 1)"/>
                                </svg>
                            </div>

                            <p class="text-lg sm:text-xl lg:text-4xl font-semibold leading-relaxed mb-10 max-w-full lg:max-w-3xl">
                                SAP Enterprise delivered an exceptionally well-executed event. Their team handled
                                everything smoothly, from planning to on-site coordination.
                            </p>

                            <div class="flex items-center gap-4 mt-8">
                                <img src="{{ asset('img/team/team4.jpg') }}" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Jonathan Pratama</p>
                                    <p class="text-xs sm:text-sm opacity-80 leading-snug">
                                        Corporate Communications Manager, Tokopedia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide min-w-full">
                        <div class="rounded-3xl px-6 py-10 sm:p-10 lg:p-16 text-white relative">

                            <div class="mb-6 opacity-90 w-8 h-8 sm:w-10 sm:h-10">
                                <svg fill="#ffffff" viewBox="0 0 8 8">
                                    <path d="M0 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3zm5 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3z" transform="translate(0 1)"/>
                                </svg>
                            </div>

                            <p class="text-lg sm:text-xl lg:text-4xl font-semibold leading-relaxed mb-10 max-w-full lg:max-w-3xl">
                                Professional team with excellent attention to detail. Our government event ran perfectly.
                            </p>

                            <div class="flex items-center gap-4 mt-8">
                                <img src="{{ asset('img/team/team.jpg') }}" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Sarah Wijaya</p>
                                    <p class="text-xs sm:text-sm opacity-80 leading-snug">
                                        Event Director, Ministry of PUPR
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide min-w-full">
                        <div class="rounded-3xl px-6 py-10 sm:p-10 lg:p-16 text-white relative">

                            <div class="mb-6 opacity-90 w-8 h-8 sm:w-10 sm:h-10">
                                <svg fill="#ffffff" viewBox="0 0 8 8">
                                    <path d="M0 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3zm5 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3z" transform="translate(0 1)"/>
                                </svg>
                            </div>

                            <p class="text-lg sm:text-xl lg:text-4xl font-semibold leading-relaxed mb-10 max-w-full lg:max-w-3xl">
                                The 3D rendering and creative design were outstanding. SAP Enterprise brought our vision to life.
                            </p>

                            <div class="flex items-center gap-4 mt-8">
                                <img src="{{ asset('img/event/wedding.jpg') }}" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Andi Kusuma</p>
                                    <p class="text-xs sm:text-sm opacity-80 leading-snug">
                                        Marketing Director, Unilever Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="absolute bottom-6 right-4 sm:bottom-10 sm:right-10 flex items-center gap-3 z-20">
                <button id="prev-btn" class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-white/30 hover:bg-white/40 transition">
                    <svg viewBox="0 0 24 24" stroke="white">
                        <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button id="next-btn" class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-white/30 hover:bg-white/40 transition">
                    <svg viewBox="0 0 24 24" stroke="white">
                        <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</section>

<section id="faq" class="w-full py-12 lg:py-24 px-6 bg-white" id="faqs">
    <div class="w-full mx-auto text-center inline-flex flex-col items-center">

        <div class="flex justify-center items-center gap-2 mb-4">
            <div class="w-2 h-2 bg-red-600"></div>
            <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">FAQS</p>
        </div>

        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 leading-tight">
            Everything You Need to Know<br class="hidden lg:inline">Before Getting Started
        </h2>

        <div class="max-w-lg">
            <p class="text-gray-500 text-sm lg:text-base mt-4 max-w-2xl mx-auto">
                Find quick answers to the most common questions about our services,
                process, and event capabilities.
            </p>
        </div>
    </div>

    <div class="w-full lg:w-8/12 mx-auto text-center">
        <div class="mt-6 lg:mt-12 space-y-2">

            <div class="faq-item rounded-xl border border-gray-200 overflow-hidden transition-all">
                <button class="faq-btn w-full flex justify-between items-center p-2 lg:p-6">
                    <span class="faq-title text-sm lg:text-lg font-semibold text-gray-800 text-start">
                        What services does SAP Enterprise provide?
                    </span>
                    <svg class="faq-icon w-3 lg:w-5 h-3 lg:h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 text-sm leading-relaxed text-justify">
                    We offer complete event planning and production, including concepting, design,
                    branding, technical support, 3D modelling, and on-site execution.
                </div>
            </div>

            <div class="faq-item rounded-xl border border-gray-200 overflow-hidden transition-all">
                <button class="faq-btn w-full flex justify-between items-center p-2 lg:p-6">
                    <span class="faq-title text-sm lg:text-lg font-semibold text-gray-800 text-start">
                        Can SAP Enterprise handle government or corporate-scale events?
                    </span>
                    <svg class="faq-icon w-5 lg:w-5 h-5 lg:h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 text-sm leading-relaxed text-justify">
                    We offer complete event planning and production, including concepting, design,
                    branding, technical support, 3D modelling, and on-site execution.
                </div>
            </div>
            <div class="faq-item rounded-xl border border-gray-200 overflow-hidden transition-all">
                <button class="faq-btn w-full flex justify-between items-center p-2 lg:p-6">
                    <span class="faq-title text-sm lg:text-lg font-semibold text-gray-800 text-start">
                        Do you offer full end-to-end event solutions?
                    </span>
                    <svg class="faq-icon w-3 lg:w-5 h-3 lg:h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 text-sm leading-relaxed text-justify">
                    We offer complete event planning and production, including concepting, design,
                    branding, technical support, 3D modelling, and on-site execution.
                </div>
            </div>
            <div class="faq-item rounded-xl border border-gray-200 overflow-hidden transition-all">
                <button class="faq-btn w-full flex justify-between items-center p-2 lg:p-6">
                    <span class="faq-title text-sm lg:text-lg font-semibold text-gray-800">
                        How early should we book an event?
                    </span>
                    <svg class="faq-icon w-3 lg:w-5 h-3 lg:h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 text-sm leading-relaxed text-justify">
                    We offer complete event planning and production, including concepting, design,
                    branding, technical support, 3D modelling, and on-site execution.
                </div>
            </div>
            <div class="faq-item rounded-xl border border-gray-200 overflow-hidden transition-all">
                <button class="faq-btn w-full flex justify-between items-center p-2 lg:p-6">
                    <span class="faq-title text-sm lg:text-lg font-semibold text-gray-800 text-start">
                        How do we get a quotation?
                    </span>
                    <svg class="faq-icon w-3 lg:w-5 h-3 lg:h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 text-sm leading-relaxed text-justify">
                    We offer complete event planning and production, including concepting, design,
                    branding, technical support, 3D modelling, and on-site execution.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full py-12 px-6 bg-white">
    <div class="w-11/12 lg:w-10/12 mx-auto">
        <div class="rounded-3xl bg-gradient-to-b from-red-400 via-red-500 to-red-600 text-center py-8 lg:py-20 px-4 lg:px-6">

            <h2 class="text-2xl lg:text-5xl font-medium text-white mb-4">
                Ready to Create an Impactful Event?
            </h2>

            <p class="text-white/80 max-w-5xl mx-auto text-sm lg:text-base mb-10 text-white">
                Let’s bring your vision to life with professional planning, creative storytelling, and seamless execution from our dedicated team.
            </p>

            <a href="#"
               class="inline-flex items-center gap-2 bg-white text-red-600 font-semibold py-1.5 lg:py-3 px-3 lg:px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                Start Your Project
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                        </svg>
            </a>

        </div>
    </div>
</section>


<script>
    function toggleAccordion(header) {
        const item = header.parentElement;
        const content = item.querySelector('.accordion-content');
        const allItems = document.querySelectorAll('.accordion-item');
        
        allItems.forEach(otherItem => {
            if (otherItem !== item) {
                const otherContent = otherItem.querySelector('.accordion-content');
                const otherHeader = otherItem.querySelector('.accordion-header h3');
                const otherNumber = otherItem.querySelector('.accordion-header span');
                otherContent.style.display = 'none';
                otherHeader.classList.remove('font-bold', 'text-red-600');
                otherHeader.classList.add('font-semibold', 'text-gray-700');
                otherNumber.classList.remove('text-red-600');
                otherNumber.classList.add('text-gray-400');
            }
        });
        
        const currentHeader = header.querySelector('h3');
        const currentNumber = header.querySelector('span');
        
        if (content.style.display === 'none') {
            content.style.display = 'block';
            currentHeader.classList.remove('font-semibold', 'text-gray-700');
            currentHeader.classList.add('font-bold', 'text-red-600');
            currentNumber.classList.remove('text-gray-400');
            currentNumber.classList.add('text-red-600');
        } else {
            content.style.display = 'none';
            currentHeader.classList.remove('font-bold', 'text-red-600');
            currentHeader.classList.add('font-semibold', 'text-gray-700');
            currentNumber.classList.remove('text-red-600');
            currentNumber.classList.add('text-gray-400');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const slidesContainer = document.querySelector('.testimonial-slides');
        const slides = document.querySelectorAll('.testimonial-slide');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const dots = document.querySelectorAll('.testimonial-dot');
        
        let currentIndex = 0;
        const totalSlides = slides.length;
        
        // Function to update carousel position
        function updateCarousel() {
            slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            // Update active dot
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        // Next button click
        nextBtn.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        });
        
        // Previous button click
        prevBtn.addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });
        
        // Dot click
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentIndex = parseInt(this.getAttribute('data-index'));
                updateCarousel();
            });
        });
        
        // Auto slide (optional)
        let autoSlide = setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        }, 5000);
        
        // Pause auto slide on hover
        const carouselContainer = document.getElementById('testimonial-carousel');
        carouselContainer.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });
        
        carouselContainer.addEventListener('mouseleave', () => {
            autoSlide = setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }, 5000);
        });
        
        // Initialize
        updateCarousel();
    });

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

                // Toggle
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
</script>
</x-app-layout>
