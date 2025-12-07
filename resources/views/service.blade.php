<x-app-layout>
    <!-- Main Section -->
    <section class="wow fadeInDown" id="main-1">
        <img src="{{ asset('img/team/team.jpg') }}" class="w-full h-full object-cover" alt="Team">
    </section>

    <!-- Services We Provide Section -->
    <section class="wow fadeInDown">
        <div class="flex justify-center">
            <div class="container w-6/12 -m-6 lg:-m-16 h-4">
                <div class="bg-red rounded-2xl lg:p-4 p-2 flex flex-col justify-between leading-normal shadow">
                    <div class="text-white font-bold lg:text-6xl text-xl text-center">
                        Services We Provide
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wow fadeInDown">
        <div class="flex justify-center">
            <div class="container w-9/12 h-full">
                <div class="p-4 flex flex-col justify-between leading-normal">
                    <div class="my-8">
                        <div class="text-gray-800 lg:text-sm text-sm mb-2 text-justify">
                            We offer a comprehensive range of services in event organizing, graphic design, and IT solutions. With a focus on innovation, quality, and customer satisfaction, our services are tailored to meet the unique needs and objectives of our clients. Whether it’s planning and executing memorable events, creating captivating graphic designs, or delivering cutting-edge technology solutions, we are dedicated to helping our clients succeed.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Planner & Organizer Section -->
    <section class="bg-red-600">
        <div class="container w-9/12 mx-auto text-left py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInLeft">Event Planner & Organizer</h2>
        </div>
        <div class="bg-white py-8 md:py-12">
            <section class="container w-9/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 wow fadeInDown">
                <!-- Text and Services Section -->
                <div class="flex flex-col justify-center">
                    <div class="text-gray-800 text-sm md:text-base text-justify mb-6 md:mb-8">
                        With a passion for creating memorable experiences, we specialize in crafting and executing flawless events tailored to our clients' unique needs and objectives. Our team of experienced event planners brings creativity, attention to detail, and exceptional organizational skills to every project, ensuring that each event is a resounding success.
                    </div>
                    <div class="font-bold text-sm md:text-base mb-4 text-center md:text-left text-red-500">
                        What All You Need is Here:
                    </div>
                    <div class="rounded-3xl border border-red-500 bg-red text-white p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="list-disc pl-4 space-y-2">
                                <li>Meeting & Conference</li>
                                <li>Convention</li>
                                <li>Seminar & Workshop</li>
                                <li>Birthday Party</li>
                                <li>Family Gathering & Gala Dinner</li>
                                <li>Expo & Exhibition</li>
                            </ul>
                            <ul class="list-disc pl-4 space-y-2">
                                <li>Graduation</li>
                                <li>Concert / Music Festival</li>
                                <li>Trade Show / Groundbreaking</li>
                                <li>Brand Activation</li>
                                <li>Talent Control</li>
                                <li>Team Show Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="relative flex items-end">
                    <img src="{{ asset('img/event/peresmianinpres-min.jpg') }}" class="rounded-3xl h-auto max-w-full" alt="Event">
                    <div class="absolute inset-x-0 bottom-0 p-4 text-center bg-red text-white rounded-3xl border border-red-500">
                        <div class="font-bold text-sm md:text-base">
                            “Bringing Your Vision, One Event at A Time”
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Wedding Organizer Section -->
    <section class="bg-red-600">
        <div class="container w-9/12 mx-auto text-right py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInRight">Wedding Organizer</h2>
        </div>
        <div class="bg-white py-8 md:py-12">
            <section class="container w-9/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 wow fadeInDown">
                 <!-- Image Section -->
                 <div class="relative flex items-end">
                    <img src="{{ asset('img/event/peresmianinpres-min.jpg') }}" class="rounded-3xl h-auto max-w-full" alt="Event">
                    <div class="absolute inset-x-0 bottom-0 p-4 text-center bg-red text-white rounded-3xl border border-red-500">
                        <div class="font-bold text-sm md:text-base">
                            “Turning Moments into Memories”
                        </div>
                    </div>
                </div>
                <!-- Text and Services Section -->
                <div class="flex flex-col justify-center">
                    <div class="text-gray-800 text-sm md:text-base text-justify mb-6 md:mb-8">
                        We specialize in creating dream weddings that are tailored to reflect the unique personalities and love stories of our clients. As professional wedding planners and organizers, we understand the significance of this special day and the importance of every detail.
                    </div>
                    <div class="font-bold text-sm md:text-base mb-4 text-center md:text-left text-red-500">
                        What All You Need is Here:
                    </div>
                    <div class="rounded-3xl border border-red-500 bg-red text-white p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="list-disc pl-4 space-y-2">
                                <li>Consultation</li>
                                <li>Planning & Design</li>
                                <li>Vendor Selection</li>
                                <li>Wedding Management</li>
                            </ul>
                            <ul class="list-disc pl-4 space-y-2">
                                <li>Execution</li>
                                <li>The Day</li>
                                <li>Event Report</li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </section>
        </div>
    </section>

    <!-- Graphic Designer & IT Solutions Section -->
    <section class="bg-red-600">
        <div class="container w-9/12 mx-auto text-left py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInLeft">Graphic Designer & IT Solutions</h2>
        </div>
        <div class="bg-white py-8 md:py-12">
            <section class="container w-9/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 wow fadeInDown">
                <!-- Text and Services Section -->
                <div class="flex flex-col justify-center">
                    <div class="text-gray-800 text-sm md:text-base text-justify mb-6 md:mb-8">
                        Our graphic design services are aimed at helping businesses effectively communicate their brand message and capture the attention of their target audience. We offer a wide range of design solutions, including logo design, brochure design, banner design, business card design, visual presentations, and social media graphics.
                    </div>
                    <div class="font-bold text-sm md:text-base mb-4 text-center md:text-left text-red-500">
                        What All You Need is Here:
                    </div>
                    <div class="rounded-3xl border border-red-500 bg-red text-white p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="list-disc pl-4 space-y-2">
                                <li>Logo Design</li>
                                <li>Flyer Design</li>
                                <li>Company Profile Design</li>
                                <li>Brand Guidelines Design</li>
                                <li>Packaging Design</li>
                                <li>Social Media Handling</li>
                                <li>Google / Instagram Ads</li>
                                <li>Visual Design</li>
                            </ul>
                            <ul class="list-disc pl-4 space-y-2">
                                <li>Illustration</li>
                                <li>Website Builder & Development</li>
                                <li>UI & UX Design</li>
                                <li>SEO Optimization</li>
                                <li>Visual Jockey</li>
                                <li>Motion Graphic</li>
                                <li>Google Workspace Service</li>
                                <li>Microsoft 365 Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="relative flex items-end">
                    <img src="{{ asset('img/event/peresmianinpres-min.jpg') }}" class="rounded-3xl h-auto max-w-full" alt="Event">
                    <div class="absolute inset-x-0 bottom-0 p-4 text-center bg-red text-white rounded-3xl border border-red-500">
                        <div class="font-bold text-sm md:text-base">
                            “Designing Solutions for Your Needs”
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="bg-red-600">
        <div class="container w-9/12 mx-auto text-right py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInRight">3D Modelling & Rendering</h2>
        </div>
        <div class="bg-white py-8 md:py-12">
            <section class="container w-9/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 wow fadeInRight">
                <!-- Image Section -->
                <div class="relative flex items-end">
                    <img src="{{ asset('img/3dmodel/underpass.jpg') }}" class="rounded-3xl h-auto max-w-full" alt="Event">
                    <div class="absolute inset-x-0 bottom-0 p-4 text-center bg-red text-white rounded-3xl border border-red-500">
                        <div class="font-bold text-sm md:text-base">
                        “Bringing Your Vision to Life with Precision”
                        </div>
                    </div>
                </div>            <!-- Text and Services Section -->
                <div class="flex flex-col justify-center">
                    <div class="text-gray-800 text-sm md:text-base text-justify mb-6 md:mb-8">
                    We are passionate about transforming ideas into visually stunning and realistic 3D models and renderings. Our expertise in 3D modelling and rendering helps businesses visualize their ideas and concepts with precision and clarity.
                    </div>
                    <div class="font-bold text-sm md:text-base mb-4 text-center md:text-left text-red-500">
                        What All You Need is Here:
                    </div>
                    <div class="rounded-3xl border border-red-500 bg-red text-white p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="list-disc pl-4 space-y-2">
                              <li>Architectural Visualisation</li>
                              <li>Interior Visualisation</li>
                              <li>Product Rendering</li>
                              <li>3D Modeling</li>
                              <li>3D Animation</li>
                              <li>Visualisation</li>
                              <li>3D Floor Plans</li>
                              <li>Virtual Tours</li>
                            </ul>
                            <ul class="list-disc pl-4 space-y-2">
                              <li>Real Estate Visualization</li>
                              <li>Game Assets Creation</li>
                              <li>Medical Visualization</li>
                              <li>Advertising Visuals</li>
                              <li>Marketing Material</li>
                              <li>Augmented Reality</li>
                              <li>Virtual Reality</li>
                              <li>Interactive 3D Experiences</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="bg-red-600">
        <div class="container w-9/12 mx-auto text-left py-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl text-white font-bold wow fadeInLeft">Branding & Advertising</h2>
        </div>
        <div class="bg-white py-8 md:py-12">
            <section class="container w-9/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 wow fadeInDown">
                <!-- Text and Services Section -->
                <div class="flex flex-col justify-center">
                    <div class="text-gray-800 text-sm md:text-base text-justify mb-6 md:mb-8">
                    We believe that a strong and cohesive brand is essential for business success. Our branding services are designed to help you establish a distinctive brand identity, build brand equity, and connect with your target audience. We work closely with you to understand your business values, market positioning, and target market.
                    </div>
                    <div class="font-bold text-sm md:text-base mb-4 text-center md:text-left text-red-500">
                        What All You Need is Here:
                    </div>
                    <div class="rounded-3xl border border-red-500 bg-red text-white p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="list-disc pl-4 space-y-2">
                              <li>Digital Printing (Outdoor)</li>
                              <li>Digital Printing (Indoor)</li>
                              <li>Media Promotion</li>
                            </ul>
                            <ul class="list-disc pl-4 space-y-2">
                              <li>Merchandise Production</li>
                              <li>Media Paper Digital Printing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="relative flex items-end">
                    <img src="{{ asset('img/event/peresmianinpres-min.jpg') }}" class="rounded-3xl h-auto max-w-full" alt="Event">
                    <div class="absolute inset-x-0 bottom-0 p-4 text-center bg-red text-white rounded-3xl border border-red-500">
                        <div class="font-bold text-sm md:text-base">
                            “Designing Solutions for Your Needs”
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-app-layout>