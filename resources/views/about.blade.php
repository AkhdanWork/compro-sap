<x-app-layout>
    <!-- Main Section -->
    <section class="wow fadeInDown" id="main-1">
        <img src="{{ asset('img/team/team.jpg') }}" class="w-full h-full object-cover" alt="Team">
    </section>

    <!-- About Us Section -->
    <section class="wow fadeInDown">
        <div class="flex justify-center">
            <div class="container w-6/12 -m-6 lg:-m-16 h-4">
                <div class="bg-red rounded-2xl lg:p-4 p-2 flex flex-col justify-between leading-normal shadow">
                    <div class="text-white font-bold lg:text-6xl text-xl text-center">
                        About Us
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wow fadeInDown py-12 bg-gray-100">
        <div class="container w-9/12 mx-auto px-4">
            <!-- Text Section -->
            <div class="text-gray-800 mb-8">
                <p class="mb-4  text-sm text-justify">
                    SAP Enterprise is a company engaged in MICE, event organizing, graphic design, IT solution services, and more. We aspire to become a leading company in this industry, focusing on innovation, quality, and customer satisfaction. With an experienced and expert team, we are committed to delivering high-quality services with optimal value-added to our clients.
                </p>
                <p class=" text-sm text-justify">
                    At SAP Enterprise, we understand the importance of building strong relationships with our clients. We prioritize open communication, attention to detail, and a deep understanding of our clients' needs. Our goal is to not only meet but also exceed our clients' expectations, ensuring their satisfaction and success.
                </p>
            </div>

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 justify-center items-center">
                <!-- Core Value Box -->
                <div class="flex items-center justify-center bg-red text-white rounded-3xl p-6 border border-red-500 mb-4 lg:mb-0 max-w-xs mx-auto hover:bg-transparent hover:text-gray-800 transition-colors duration-300">
                    <p class="text-center text-sm md:text-base lg:text-lg">
                        Choose SAP Enterprise as your trusted partner, and let us bring your visions to life with passion, precision, and professionalism.
                    </p>
                </div>
                
                <!-- Image Section -->
                <div class="flex items-center justify-center">
                    <img src="{{ asset('img/logo_putih.jpg') }}" class="rounded-3xl shadow-2xl max-w-xs h-auto object-cover" alt="SAP Enterprise Logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Vision and Mission Section -->
    <section class="bg-red">
        <div class="container w-9/12 mx-auto text-left py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInLeft">Our Vision and Mission</h2>
        </div>
        <div class="bg-white py-8">
            <section class="wow fadeInDown">
                <div class="flex justify-center">
                    <div class="container w-9/12 lg:w-9/12">
                        <div class="text-gray-800 lg:text-sm text-sm text-justify mb-8">
                            We specialize in creating dream weddings that are tailored to reflect the unique personalities and love stories of our clients. As professional wedding planners and organizers, we understand the significance of this special day and the importance of every detail.
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 container w-9/12 mx-auto">
                    <!-- Image and Quote Section -->
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('img/team/team.jpg') }}" class="rounded-3xl h-40 lg:h-auto max-w-full mx-auto" alt="Team">
                        <div class="relative p-3 rounded-3xl border border-red-500 bg-red text-white hover:bg-white hover:text-gray-800 -mt-12 w-5/6 mx-auto text-center">
                            <div class="font-bold lg:text-md text-sm">
                                “To be the leading provider of innovative event organizing, graphic design, and IT solutions, empowering our clients to achieve their goals and stand out in their respective industries.”
                            </div>
                        </div>
                    </div>

                    <!-- Icons and Core Values Section -->
                    <div class="flex flex-col justify-between">
                        <!-- Icons Row -->
                        <div class="grid grid-cols-2 gap-4 justify-items-center mb-4">
                            <img src="{{ asset('img/icon/icon_inovation.png') }}" class="h-24 w-24 mx-auto" alt="Innovation">
                            <img src="{{ asset('img/icon/icon_creativity.png') }}" class="h-24 w-24 mx-auto" alt="Creativity">
                        </div>
                        <!-- Core Values Row -->
                        <div class="grid grid-cols-2 gap-4 justify-items-center mb-4">
                            <div class="rounded-3xl border border-red-500 bg-red text-white hover:bg-transparent hover:text-gray-800 p-4 text-center w-2/3 mx-auto">
                                Embrace Innovation
                            </div>
                            <div class="rounded-3xl border border-red-500 bg-red text-white hover:bg-transparent hover:text-gray-800 p-4 text-center w-2/3 mx-auto">
                                Cultivate <br> Creativity
                            </div>
                        </div>
                        <!-- More Icons Row -->
                        <div class="grid grid-cols-2 gap-4 justify-items-center mb-4">
                            <img src="{{ asset('img/icon/icon_service.png') }}" class="h-24 w-24 mx-auto" alt="Service">
                            <img src="{{ asset('img/icon/icon_partner.png') }}" class="h-24 w-24 mx-auto" alt="Partner">
                        </div>
                        <!-- More Core Values Row -->
                        <div class="grid grid-cols-2 gap-4 justify-items-center">
                            <div class="rounded-3xl border border-red-500 bg-red text-white hover:bg-transparent hover:text-gray-800 p-4 text-center w-2/3 mx-auto">
                                Deliver Exceptional Services
                            </div>
                            <div class="rounded-3xl border border-red-500 bg-red text-white hover:bg-transparent hover:text-gray-800 p-4 text-center w-2/3 mx-auto">
                                Foster Long-Term Partnership
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <!-- Our Core Value Section -->
    <section class="bg-red">
        <div class="container w-9/12 mx-auto text-right py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInRight">Our Core Value</h2>
        </div>
        <div class="bg-white">
            <section class="wow fadeInDown">
                <div class="container w-9/12 lg:w-9/12 mx-auto">
                    <div class="p-4 flex flex-col justify-between leading-normal">
                        <div class="text-gray-800 text-sm lg:text-base text-justify">
                            These core values guide our actions, decisions, and interactions with clients, partners, and each other. They are the driving force behind our commitment to excellence, integrity, customer satisfaction, innovation, and teamwork.
                        </div>
                    </div>
                    <div class="lg:h-full h-auto grid grid-cols-1 lg:grid-cols-2 gap-4 mb-8 items-center">
                        <!-- Core Values Section -->
                        <div class="space-y-2">
                            <div class="flex items-center bg-red-600 rounded-3xl p-4 shadow-lg">
                                <div class="bg-red-500 text-white text-lg p-2 font-bold rounded-full flex items-center justify-center h-12 w-12 mr-4">
                                    01
                                </div>
                                <div class="text-white flex flex-col">
                                    <span class="font-bold text-lg">Excellence</span>
                                    <span class="text-sm">We are committed to delivering high-quality services that meet and exceed industry standards.</span>
                                </div>
                            </div>
                            <div class="flex items-center bg-red-600 rounded-3xl p-4 shadow-lg">
                                <div class="bg-red-500 text-white text-lg p-2 font-bold rounded-full flex items-center justify-center h-12 w-12 mr-4">
                                    02
                                </div>
                                <div class="text-white flex flex-col">
                                    <span class="font-bold text-lg">Integrity</span>
                                    <span class="text-sm">We conduct ourselves with honesty, transparency, and ethical practices in all aspects of our operations.</span>
                                </div>
                            </div>
                            <div class="flex items-center bg-red-600 rounded-3xl p-4 shadow-lg">
                                <div class="bg-red-500 text-white text-lg p-2 font-bold rounded-full flex items-center justify-center h-12 w-12 mr-4">
                                    03
                                </div>
                                <div class="text-white flex flex-col">
                                    <span class="font-bold text-lg">Innovation</span>
                                    <span class="text-sm">We continuously seek new ideas, technologies, and approaches to deliver creative and impactful solutions to our clients.</span>
                                </div>
                            </div>
                            <div class="flex items-center bg-red-600 rounded-3xl p-4 shadow-lg">
                                <div class="bg-red-500 text-white text-lg p-2 font-bold rounded-full flex items-center justify-center h-12 w-12 mr-4">
                                    04
                                </div>
                                <div class="text-white flex flex-col">
                                    <span class="font-bold text-lg">Teamwork</span>
                                    <span class="text-sm">By working together, we harness the collective expertise and creativity of our team to deliver outstanding results.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Image Section -->
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('img/team/team4.jpg') }}" class="rounded-3xl shadow-2xl max-w-full h-auto object-cover" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
         
    <section class="bg-red">
        <div class="container w-9/12 mx-auto text-left py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInLeft">Legality</h2>
        </div>
        <div class="bg-white py-8">
            <section class="wow fadeInDown">
                <!-- Text Section -->
                <div class="container w-9/12 mx-auto mb-8">
                    <p class="text-gray-800 lg:text-sm text-sm text-justify">
                        At SAP Enterprise, we prioritize legal compliance and adhere to all applicable laws, regulations, and industry standards. We conduct our business activities with the utmost integrity, ensuring that our operations are transparent, ethical, and in full compliance with the legal framework.
                    </p>
                </div>

                <!-- Grid Layout for Images and Descriptions -->
                <div class="container w-9/12 mx-auto">
                    <!-- Grid for Images and Descriptions -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- Grid Item 1 -->
                        <div class="flex flex-col justify-between h-full">
                            <figure class="relative flex-grow transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-2xl overflow-hidden mb-2">
                                <img class="rounded-lg transform hover:scale-110 motion-reduce:transform-none w-full h-auto object-cover" src="{{ asset('img/4x/Asset51-min.png') }}" alt="Nomor Induk Berusaha">
                            </figure>
                            <div class="rounded-3xl border border-red-500 bg-red text-white text-sm hover:bg-transparent hover:text-gray-800 lg:font-bold lg:p-4 p-2 lg:px-4 text-center">
                                Nomor Induk Berusaha
                            </div>
                        </div>
                        <!-- Grid Item 2 -->
                        <div class="flex flex-col justify-between h-full">
                            <figure class="relative flex-grow transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-2xl overflow-hidden mb-2">
                                <img class="rounded-lg transform hover:scale-110 motion-reduce:transform-none w-full h-auto object-cover" src="{{ asset('img/4x/Asset50-min.png') }}" alt="Akta Pendirian PT">
                            </figure>
                            <div class="rounded-3xl border border-red-500 bg-red text-white text-sm hover:bg-transparent hover:text-gray-800 lg:font-bold lg:p-4 p-2 lg:px-4 text-center">
                                Akta Pendirian PT
                            </div>
                        </div>
                        <!-- Grid Item 3 -->
                        <div class="flex flex-col justify-between h-full">
                            <figure class="relative flex-grow transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-2xl overflow-hidden mb-2">
                                <img class="rounded-lg transform hover:scale-110 motion-reduce:transform-none w-full h-auto object-cover" src="{{ asset('img/4x/Asset49-min.png') }}" alt="Pengesahan Badan Hukum">
                            </figure>
                            <div class="rounded-3xl border border-red-500 bg-red text-white text-sm hover:bg-transparent hover:text-gray-800 lg:font-bold lg:p-4 p-2 lg:px-4 text-center">
                                Pengesahan Badan Hukum
                            </div>
                        </div>
                        <!-- Grid Item 4 -->
                        <div class="flex flex-col justify-between h-full">
                            <figure class="relative flex-grow transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-2xl overflow-hidden mb-2">
                                <img class="rounded-lg transform hover:scale-110 motion-reduce:transform-none w-full h-auto object-cover" src="{{ asset('img/4x/Asset48-min.png') }}" alt="Nomor Pokok Wajib Pajak">
                            </figure>
                            <div class="rounded-3xl border border-red-500 bg-red text-white text-sm hover:bg-transparent hover:text-gray-800 lg:font-bold lg:p-4 p-2 lg:px-4 text-center">
                                Nomor Pokok Wajib Pajak
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    
</x-app-layout>