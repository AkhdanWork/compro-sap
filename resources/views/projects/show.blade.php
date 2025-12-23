<x-app-layout>
    <section class="bg-white py-16 lg:py-24">
        <div class="container w-9/12 mx-auto">
            <div class="mb-4">
                <!-- <a href="{{ route('projects.all', ['category' => strtolower(str_replace(['Corporate Event', 'Wedding', '3D Modelling & Rendering', 'Graphic Design'], ['event', 'wedding', 'modelling', 'graphic'], $project->category))]) }}" 
                   class="inline-flex items-center px-4 py-2 border-2 border-red-600 text-red-600 font-semibold rounded-full hover:bg-red-600 hover:text-white transition-all duration-300"> -->
                <a href="{{ route('projects.all') }}" 
                    class="inline-flex items-center px-4 py-2 border-2 border-red-600 text-red-600 font-semibold rounded-full hover:bg-red-600 hover:text-white transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Projects
                </a>
            </div>
            
            <div class="mb-4">
                <nav class="flex items-center space-x-2 text-sm text-gray-600">
                    <a href="{{ route('home') }}" class="hover:text-red-600 transition">Home</a>
                    <span>/</span>
                    <a href="{{ route('projects.all') }}" class="hover:text-red-600 transition">Projects</a>
                    <span>/</span>
                    <span class="text-gray-900 font-semibold">{{ $project->title }}</span>
                </nav>
            </div>

            <!-- Project Header -->
            <div class="mb-12">
                <div class="mb-4">
                    <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                        {{ $project->category }}
                    </span>
                </div>
                
                <h1 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6">
                    {{ $project->title }}
                </h1>

                <div class="flex flex-wrap gap-6 text-gray-600">
                    @if(isset($project->client))
                    <div>
                        <p class="text-sm font-semibold text-gray-400 uppercase mb-1">Client</p>
                        <p class="text-base">{{ $project->client }}</p>
                    </div>
                    @endif
                    
                    <div>
                        <p class="text-sm font-semibold text-gray-400 uppercase mb-1">Date</p>
                        <p class="text-base">{{ \Carbon\Carbon::parse($project->date)->format('F Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Project Image -->
            <div class="mb-12">
                <div class="relative h-96 lg:h-[600px] rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('storage/' . $project->image) }}" 
                         alt="{{ $project->title }}" 
                         class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Project Description (jika ada) -->
            @if(isset($project->description))
            <div class="mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">Project Description</h2>
                <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                    {!! nl2br(e($project->description)) !!}
                </div>
            </div>
            @endif

        </div>
    </section>
</x-app-layout>