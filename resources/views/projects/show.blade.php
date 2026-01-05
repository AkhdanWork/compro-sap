<x-app-layout>
    <section class="bg-gray-50 min-h-screen">
        <div class="relative w-full h-[50vh] lg:h-[70vh] bg-gray-900">
            <img src="{{ asset('storage/' . $project->image) }}" 
                 alt="{{ $project->title }}" 
                 class="w-full h-full object-cover opacity-90">
            
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent"></div>
            
            <div class="absolute top-16 lg:top-20 left-6 z-10">
                <a href="{{ route('projects.all') }}" 
                   class="inline-flex items-center px-3 lg:px-4 py-1 lg:py-2 bg-white/10 text-sm lg:text-lg backdrop-blur-md border border-white/20 text-white font-medium rounded-full hover:bg-white hover:text-gray-900 transition-all duration-300 shadow-lg">
                    <svg class="w-3 lg:w-5 h-3 lg:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back
                </a>
            </div>

            <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-12">
                <div class="container w-11/12 lg:w-9/12 mx-auto">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-1.5 bg-red-600 text-white text-xs font-bold uppercase tracking-wider rounded-full">
                            {{ $project->category }}
                        </span>
                    </div>
                    
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 drop-shadow-lg">
                        {{ $project->title }}
                    </h1>

                    <div class="flex flex-wrap gap-6 lg:gap-8 text-white/90">
                        @if(isset($project->client))
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="text-xs text-white/60 uppercase tracking-wide">Client</p>
                                <p class="text-base font-semibold">{{ $project->client }}</p>
                            </div>
                        </div>
                        @endif
                        
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="text-xs text-white/60 uppercase tracking-wide">Date</p>
                                <p class="text-base font-semibold">{{ \Carbon\Carbon::parse($project->date)->format('F Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container w-11/12 lg:w-9/12 mx-auto py-4 lg:py-8">
            
            <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-8">
                <a href="{{ route('home') }}" class="hover:text-red-600 transition">Home</a>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <a href="{{ route('projects.all') }}" class="hover:text-red-600 transition">Projects</a>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-900 font-medium">{{ Str::limit($project->title, 30) }}</span>
            </nav>

            @if(isset($project->description) && !empty($project->description))
            <div class="bg-white rounded-2xl shadow-md p-6 lg:p-12 mb-6 lg:mb-12">
                <div class="flex items-center gap-3 mb-3 lg:mb-6">
                    <div class="w-1 h-6 lg:h-8 bg-red-600 rounded-full"></div>
                    <h2 class="text-xl lg:text-3xl font-bold text-gray-900">About This Project</h2>
                </div>
                
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    {!! nl2br(e($project->description)) !!}
                </div>
            </div>
            @endif

            <div class="mt-6 lg:mt-12 rounded-3xl bg-gradient-to-b from-red-400 via-red-500 to-red-600 shadow-xl p-6 lg:p-12 text-center text-white">
                <h3 class="text-xl lg:text-3xl font-bold mb-4">Interested in Similar Projects?</h3>
                <p class="text-md lg:text-lg text-white/90 mb-6 max-w-2xl mx-auto">
                    Let's discuss how we can bring your vision to life with our expertise and creativity.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}#contact" 
                       class="inline-flex items-center justify-center px-4 lg:px-8 py-2 lg:py-3 bg-white text-red-600 font-bold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Us
                    </a>
                    <a href="{{ route('projects.all') }}" 
                       class="inline-flex items-center justify-center px-4 lg:px-8 py-2 lg:py-3 bg-white/10 backdrop-blur-sm border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-red-600 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        View All Projects
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>