<x-app-layout>
<section class="bg-cover bg-center min-h-screen bg-gray-700 bg-blend-multiply flex items-end" style="background-image: url('{{ asset('img/event/peresmianinpres-min.jpg') }}');">
    <div class="px-4 mx-auto container w-9/12 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-end">
            
            <div class="space-y-6">
                <h1 class="text-5xl md:text-5xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight leading-tight text-white">
                    One Stop<br>
                    Event Solution
                </h1>
            </div>

            <div class="space-y-6 lg:space-y-8">
                <p class="text-base md:text-lg lg:text-xl text-gray-200 leading-relaxed">
                    We provide full-scope event, MICE, creative, and technical services to ensure seamless coordination and impactful results for every occasion.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="group inline-flex items-center justify-center px-4 py-2 bg-red text-white font-bold text-base rounded-lg hover:bg-white hover:text-red-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Start Your Project
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                        </svg>
                    </a>

                    <a href="{{ route('projects') }}" class="group inline-flex items-center justify-center px-4 py-2 bg-transparent text-white font-semibold text-base rounded-lg border-2 border-white hover:bg-white hover:text-red-600 transition-all duration-300 transform hover:-translate-y-1">
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
    <div class="container w-9/12 mx-auto wow fadeInDown">
      <h5 class="text-xl lg:text-2xl text-center text-black font-bold wow fadeInTop">Trusted by Leading Brands and Institutions</h5>
      <div id="default-carousel" class="container mx-auto pt-6" data-carousel="slide">
        <div class="relative h-48 md:h-28 overflow-hidden rounded-lg">
          @foreach (array_chunk($carouselPartnerItems, 8) as $carouselChunk)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <div class="grid lg:grid-cols-8 grid-cols-4 gap-4">
                @foreach ($carouselChunk as $item)
                  <div class="flex justify-center items-center">
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="h-12 lg:h-16 object-contain transform hover:scale-105 motion-reduce:transform-none">
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

<section class="bg-gray-50 py-16 lg:py-24" id="aboutUs">
    <div class="container w-9/12 mx-auto">
        
        <div class="grid lg:grid-cols-10 gap-8 lg:gap-12 items-start">
            <div class="lg:col-span-6">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-1 p-1 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">ABOUT US</p>
                </div>

                <h2 class="text-3xl lg:text-3xl font-bold text-gray-900 leading-tight mt-2">
                    Building Events That Move People
                </h2>
            </div>

            <div class="lg:col-span-4">
                <div class="flex flex-col h-full justify-between">
                    <p class="text-xs lg:text-xs text-gray-600 leading-relaxed">
                        We provide complete event and MICE services supported by creative, production, and technical expertise.
                    </p>

                    <div class="flex justify-end mt-2">
                        <a href="{{ route('about') }}" class="inline-flex items-center px-3 py-1 bg-red-600 text-white text-xs rounded-3xl hover:bg-red-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 group">
                            Learn More
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-stretch"> 
            <div class="relative rounded-2xl overflow-hidden shadow-xl group h-full">
                <img src="{{ asset('img/team/team.jpg') }}" alt="SAP Enterprise Team" class="w-full h-full object-cover">
                
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 via-black/70 to-transparent p-2 lg:p-2">
                    <p class="text-white text-xs lg:text-base leading-relaxed text-justify">
                        SAP Enterprise is an Indonesian event and MICE agency specializing in planning, coordinating, and executing professional events for brands, institutions, and organizations. Operating under PT Setia Alfa Perkasa Enterprise, we deliver reliable, detail-driven solutions from concept to completion.
                    </p>
                </div>
            </div>

            <div class="space-y-8 lg:space-y-10 h-full">
                <div class="flex items-start space-x-4 group">
                    <div>
                        <h3 class="text-4xl lg:text-5xl font-medium text-gray-900 mb-2">
                            <span class="text-red-600">+</span>300
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg font-medium">
                            Completed Events Across Indonesia
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 group">
                    <div>
                        <h3 class="text-4xl lg:text-5xl font-medium text-gray-900 mb-2">
                            <span class="text-red-600">+</span>10
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg font-medium">
                            Years of Experience in Event & MICE Industry
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 group">
                    <div>
                        <h3 class="text-4xl lg:text-5xl font-medium text-gray-900 mb-2">
                            <span class="text-red-600">+</span>50
                        </h3>
                        <p class="text-gray-600 text-base lg:text-lg font-medium">
                            Government, Corporate, and Organizational Clients
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-white py-16 lg:py-24" id ="ourValues">
    <div class="container w-9/12 mx-auto">
        
        <div class="text-center mb-12 lg:mb-16">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <div class="w-1 h-1 p-1 bg-red-600"></div>
                <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">OUR VALUES</p>
            </div>

            <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6">
                The Principles That Shape Our Work
            </h2>

            <p class="text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We uphold a set of values that guide every project—from planning to execution—to ensure professionalism, consistency, and excellence in every event we deliver.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <div class="group border border-gray-100 rounded-2xl p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                <div class="w-16 h-16 mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3">Excellence</h3>
                <p class="text-gray-600 leading-relaxed">
                    We commit to delivering high-quality results through precise planning, strong coordination, and attention to detail.
                </p>
            </div>

            <div class="group border border-gray-100 rounded-2xl p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                <div class="w-16 h-16 mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3">Integrity</h3>
                <p class="text-gray-600 leading-relaxed">
                    We build trust through transparency, responsibility, and ethical practices in every client engagement.
                </p>
            </div>

            <div class="group border border-gray-100 rounded-2xl p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">      
                <div class="w-16 h-16 mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Innovation</h3>
                <p class="text-gray-600 leading-relaxed">
                    We embrace creativity and new ideas to deliver events that are fresh, modern, and relevant to evolving industry needs.
                </p>
            </div>

            <div class="group border border-gray-100 rounded-2xl p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                
                <div class="w-16 h-16 mb-6 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transform group-hover:-translate-y-1 transition-all duration-300 bg-gradient-to-b from-red-400 via-red-600 to-red-700 group-hover:from-red-600 group-hover:via-red-700 group-hover:to-red-800">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Collaboration</h3>
                <p class="text-gray-600 leading-relaxed">
                    We work closely with clients, partners, and teams to ensure seamless execution and unified outcomes.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="bg-gray-50 py-16 lg:py-24" id="ourServices">
    <div class="container w-9/12 mx-auto">
        
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">
            
            <div class="lg:col-span-5">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-2 h-2 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">OUR SERVICES</p>
                </div>

                <h2 class="text-3xl lg:text-5xl font-semibold text-gray-900 leading-tight mb-6">
                    Comprehensive Solutions for Every Event Need
                </h2>

                <p class="text-sm sm:text-sm text-gray-600 leading-relaxed">
                    We offer integrated services that cover every stage of your event from planning and creative development to production, technology, and equipment support.
                </p>
            </div>

            <div class="lg:col-span-7">
                
                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-xl lg:text-2xl font-bold text-red-600">Event Planner & Organizer</h3>
                        <span class="text-red-600 font-semibold text-lg">// 01</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="rounded-xl overflow-hidden">
                                <img src="{{ asset('img/event/peresmianinpres-min.jpg') }}" alt="Event Planner" class="w-full h-48 object-cover">
                            </div>

                            <div class="flex flex-col justify-between space-y-4">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We design and execute tailored events that align with your goals. With strong creativity, precise coordination, and reliable planning, our team ensures every event is delivered smoothly and successfully.
                                </p>

                                <div>
                                    <a href="{{ route('service') }}" class="inline-flex items-center justify-center px-5 py-2.5 border-2 border-red-600 text-red-600 font-semibold text-sm rounded-full hover:bg-red-600 hover:text-white transition-all duration-300 group">
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
                    <div class="accordion-header flex items-center justify-between p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-xl lg:text-2xl font-semibold text-gray-700">Wedding Organizer</h3>
                        <span class="text-gray-400 font-semibold text-lg">// 02</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="rounded-xl overflow-hidden">
                                <img src="{{ asset('img/event/wedding.jpg') }}" alt="Wedding Organizer" class="w-full h-48 object-cover">
                            </div>
                            <div class="flex flex-col justify-between space-y-4">
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    We create unforgettable weddings with personalized themes, flawless coordination, and attention to every detail.
                                </p>
                                <div>
                                    <a href="{{ route('service') }}" class="inline-flex items-center justify-center px-5 py-2.5 border-2 border-red-600 text-red-600 font-semibold text-sm rounded-full hover:bg-red-600 hover:text-white transition-all duration-300 group">
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
                    <div class="accordion-header flex items-center justify-between p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-xl lg:text-2xl font-semibold text-gray-700">3D Modelling & Rendering</h3>
                        <span class="text-gray-400 font-semibold text-lg">// 03</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <p class="text-gray-600 text-sm">3D visualization and rendering services for events.</p>
                    </div>
                </div>

                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-xl lg:text-2xl font-semibold text-gray-700">Graphic Design & IT Solutions</h3>
                        <span class="text-gray-400 font-semibold text-lg">// 04</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <p class="text-gray-600 text-sm">Creative design and technology solutions.</p>
                    </div>
                </div>

                <div class="accordion-item border-b border-gray-200">
                    <div class="accordion-header flex items-center justify-between p-6 cursor-pointer hover:bg-gray-50 transition-colors" onclick="toggleAccordion(this)">
                        <h3 class="text-xl lg:text-2xl font-semibold text-gray-700">Branding & Advertising</h3>
                        <span class="text-gray-400 font-semibold text-lg">// 05</span>
                    </div>
                    
                    <div class="accordion-content px-6 pb-6" style="display: none;">
                        <p class="text-gray-600 text-sm">Strategic branding and advertising campaigns.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section class="bg-white py-16 lg:py-24" id="whyChooseUs">
    <div class="container w-9/12 mx-auto">
        
        <div class="text-center mb-12 lg:mb-16">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <div class="w-1 h-1 p-1 bg-red-600"></div>
                <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">WHY CHOOSE US</p>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6">
                What Makes SAP Enterprise Different
            </h2>
            <p class="text-base lg:text-base text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We deliver professional, reliable, and complete event solutions backed by strong expertise, proven experience, and a dedicated team.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-6">
            <div class="group border-2 border-gray-200 rounded-2xl p-0 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                <div class="p-6">
                    <img src="{{ asset('img/team/team4.jpg') }}" alt="End-to-End Event Capability" class="rounded-2xl w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300">
                </div>

                <div class="border-t border-gray-200"></div>

                <div class="p-6">
                    <h3 class="text-2xl lg:text-3xl font-medium text-gray-900 mb-3">
                        End-to-End Event Capability
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We manage every stage of your event—planning, design, production, and technical support—within one integrated team.
                    </p>
                </div>
            </div>

            <div class="group border-2 border-gray-200 rounded-2xl p-0 hover:border-red-300 transition-all duration-300 hover:shadow-lg overflow-hidden">

                <div class="p-6">
                    <img src="{{ asset('img/team/team4.jpg') }}" 
                        alt="Experienced Team You Can Rely On" 
                        class="rounded-2xl w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300">
                </div>

                <div class="border-t border-gray-200"></div>

                <div class="p-6">
                    <h3 class="text-2xl lg:text-3xl font-medium text-gray-900 mb-3">
                        Experienced Team You Can Rely On
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our planners, creatives, and technical crew bring years of experience handling government, corporate, and organizational events.
                    </p>
                </div>
            </div>

        </div>

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
                <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Proven Track Record Across Indonesia
                </h3>
                <p class="text-gray-600 text-base lg:text-lg leading-relaxed mb-6">
                    Hundreds of successful events reflect our commitment to quality, reliability, and client satisfaction.
                </p>
                <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 bg-red-600 text-white font-semibold text-base rounded-full hover:bg-red-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 group">
                    Start Your Project
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                </svg>
                </a>
            </div>

            <div class="border-2 border-gray-200 rounded-2xl p-6 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('img/team/team4.jpg') }}" alt="Proven Track Record" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-gray-50 py-16 lg:py-24" id="ourPortfolio">
    <div class="container w-9/12 mx-auto">
        
        <div class="grid lg:grid-cols-10 gap-8 lg:gap-12 mb-12 items-start">
            <div class="lg:col-span-5">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-1 p-1 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">OUR PORTFOLIO</p>
                </div>

                <h2 class="text-3xl lg:text-3xl font-bold text-gray-900 leading-tight mt-2">
                    Showcasing Events We’ve Successfully Delivered
                </h2>
            </div>

            <div class="lg:col-span-2"></div>

            <div class="lg:col-span-3 flex flex-col h-full justify-end items-end">
                <p class="text-xs lg:text-xs text-gray-600 leading-relaxed text-right">
                    We take pride in delivering impactful events for government institutions, organizations, and leading brands across Indonesia.
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-4 lg:gap-4 flex flex-col mb-4">
            <div class="bg-white border-2 border-gray-200 rounded-2xl w-full h-96 p-6 flex flex-col shadow-lg hover:border-red-300 transition-all duration-300 hover:shadow-xl">
                <div class="inline-flex items-center justify-center px-4 py-1 bg-red-50 text-red-500 font-semibold text-base rounded-full w-52">
                    Corporate Conference
                </div>

                <h3 class="text-md lg:text-xl py-4 font-bold text-gray-900">
                    Annual Leadership Summit 2024
                </h3>

                <p class="text-gray-600 text-base lg:text-sm leading-relaxed">
                    A large-scale corporate summit featuring keynote sessions,
                    leadership workshops, and a full-stage production setup.
                </p>
                <div class="mt-auto">
                    <a href="#contact" class="inline-flex items-center justify-center px-4 py-1 text-red-500 font-semibold text-base rounded-full hover:bg-red-700 hover:text-white transition-all duration-300 transform hover:-translate-y-1 group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 17L17 7M17 7H7M17 7V17"></path>
                        </svg>
                    </a>
                </div>
            </div>


            <div class="rounded-2xl hover:border-red-300 transition-all duration-300 hover:shadow-xl">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('img/team/team4.jpg') }}" alt="Proven Track Record" class="w-full h-96 object-cover">
                </div>
            </div>
        </div>
        

        <div class="grid lg:grid-cols-2 gap-4 lg:gap-4 flex flex-col">
            <div class="rounded-2xl hover:border-red-300 transition-all duration-300 hover:shadow-xl">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('img/team/team4.jpg') }}" alt="Proven Track Record" class="w-full h-96 object-cover">
                </div>
            </div>
            
            <div class="bg-white border-2 border-gray-200 rounded-2xl w-full h-96 p-6 flex flex-col shadow-lg hover:border-red-300 transition-all duration-300 hover:shadow-xl">
                <div class="inline-flex items-center justify-center px-4 py-1 bg-red-50 text-red-500 font-semibold text-base rounded-full w-44">
                    Government Event
                </div>

                <h3 class="text-md lg:text-xl py-4 font-bold text-gray-900">
                    Kementerian PUPR – National Infrastructure Forum
                </h3>

                <p class="text-gray-600 text-base lg:text-sm leading-relaxed">
                    A formal government forum supported with full event planning, stage design, technical production, and protocol management.
                </p>

                <div class="mt-auto">
                    <a href="#contact" class="inline-flex items-center justify-center px-4 py-1 bg-red-50 text-red-500 font-semibold text-base rounded-full hover:bg-red-700 hover:text-white transition-all duration-300 transform hover:-translate-y-1 group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 17L17 7M17 7H7M17 7V17"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-10">
            <a href="#projects"
            class="px-8 py-3 border-2 border-red-600 text-red-600 font-semibold text-lg rounded-full 
                    transition-all duration-300 hover:bg-red-600 hover:text-white hover:shadow-lg inline-flex items-center">
                View More Projects
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="w-full py-20 px-6 bg-gradient-to-b from-red-400 via-red-500 to-red-600" id="qoutes">
    <div class="w-9/12 mx-auto">
        <div id="testimonial-carousel" class="relative">

            <div class="relative overflow-hidden">
                <div class="testimonial-slides flex transition-transform duration-500 ease-in-out">

                    <div class="testimonial-slide min-w-full">
                        <div class="rounded-3xl p-10 lg:p-16 text-white relative overflow-hidden">
                            <div class="mb-6 opacity-90 w-10 h-10">
                                <svg fill="#ffffff" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3zm5 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3z" transform="translate(0 1)"></path>
                                </svg>
                            </div>

                            <p class="text-2xl lg:text-4xl font-semibold leading-relaxed mb-10 max-w-3xl">
                                SAP Enterprise delivered an exceptionally well-executed event. Their team handled
                                everything smoothly, from planning to on-site coordination.
                            </p>

                            <div class="flex items-center gap-4">
                                <img src="{{ asset('img/team/team4.jpg') }}" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-lg">Jonathan Pratama</p>
                                    <p class="text-sm opacity-80">Corporate Communications Manager, Tokopedia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide min-w-full">
                        <div class="rounded-3xl p-10 lg:p-16 text-white relative overflow-hidden">
                            <div class="mb-6 opacity-90 w-10 h-10">
                                <svg fill="#ffffff" viewBox="0 0 8 8">
                                    <path d="M0 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3zm5 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3z" transform="translate(0 1)"></path>
                                </svg>
                            </div>

                            <p class="text-2xl lg:text-4xl font-semibold leading-relaxed mb-10 max-w-3xl">
                                Professional team with excellent attention to detail. Our government event ran perfectly.
                            </p>

                            <div class="flex items-center gap-4">
                                <img src="{{ asset('img/team/team.jpg') }}" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-lg">Sarah Wijaya</p>
                                    <p class="text-sm opacity-80">Event Director, Ministry of PUPR</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slide min-w-full">
                        <div class="rounded-3xl p-10 lg:p-16 text-white relative overflow-hidden">
                            <div class="mb-6 opacity-90 w-10 h-10">
                                <svg fill="#ffffff" viewBox="0 0 8 8">
                                    <path d="M0 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3zm5 0v3h2c0 1.11-.89 2-2 2v1c1.65 0 3-1.35 3-3v-3h-3z" transform="translate(0 1)"></path>
                                </svg>
                            </div>

                            <p class="text-2xl lg:text-4xl font-semibold leading-relaxed mb-10 max-w-3xl">
                                The 3D rendering and creative design were outstanding. SAP Enterprise brought our vision to life.
                            </p>

                            <div class="flex items-center gap-4">
                                <img src="{{ asset('img/event/wedding.jpg') }}" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-lg">Andi Kusuma</p>
                                    <p class="text-sm opacity-80">Marketing Director, Unilever Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="absolute bottom-14 right-10 flex items-center gap-3 z-20">
                <button id="prev-btn" class="w-12 h-12 p-2 flex items-center justify-center rounded-full bg-white/30 hover:bg-white/40 transition">
                    <svg viewBox="0 0 24 24" fill="#ffffff" stroke="white" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke="white" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> </svg>
                </button>

                <button id="next-btn" class="w-12 h-12 p-2 flex items-center justify-center rounded-full bg-white/30 hover:bg-white/40 transition">
                    <svg viewBox="0 0 24 24" fill="#ffffff" stroke="white" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke="white" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> </svg>
                </button>
            </div>

        </div>
    </div>
</section>


<section id="faq" class="w-full py-20 px-6 bg-white" id="faqs">
    <div class="w-full mx-auto text-center inline-flex flex-col items-center">

        <div class="flex justify-center items-center gap-2 mb-4">
            <div class="w-2 h-2 bg-red-600"></div>
            <p class="text-gray-400 font-semibold text-sm uppercase tracking-widest">FAQS</p>
        </div>

        <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 leading-tight">
            Everything You Need to Know<br>Before Getting Started
        </h2>

        <div class="max-w-lg">
            <p class="text-gray-500 text-sm lg:text-base mt-4 max-w-2xl mx-auto">
                Find quick answers to the most common questions about our services,
                process, and event capabilities.
            </p>
        </div>
    </div>

    <div class="w-8/12 mx-auto text-center">
                <div class="mt-12 space-y-4">

            <div class="faq-item rounded-xl border border-gray-200 overflow-hidden transition-all">
                <button class="faq-btn w-full flex justify-between items-center p-6">
                    <span class="faq-title text-lg font-semibold text-gray-800">
                        What services does SAP Enterprise provide?
                    </span>
                    <svg class="faq-icon w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <button class="faq-btn w-full flex justify-between items-center p-6">
                    <span class="faq-title text-lg font-semibold text-gray-800">
                        What services does SAP Enterprise provide?
                    </span>
                    <svg class="faq-icon w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <button class="faq-btn w-full flex justify-between items-center p-6">
                    <span class="faq-title text-lg font-semibold text-gray-800">
                        What services does SAP Enterprise provide?
                    </span>
                    <svg class="faq-icon w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <button class="faq-btn w-full flex justify-between items-center p-6">
                    <span class="faq-title text-lg font-semibold text-gray-800">
                        What services does SAP Enterprise provide?
                    </span>
                    <svg class="faq-icon w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
