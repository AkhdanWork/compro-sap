<x-app-layout>
    <section class="bg-white py-16 lg:py-24">
        <div class="container w-11/12 lg:w-9/12 mx-auto">
            
            <div class="text-center mb-12">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-wider">Categories</p>
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-gray-900 mb-4 lg:mb-6">
                    Discover Our Work by Event Type
                </h2>

                <p class="text-sm lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed mb-4 lg:mb-8">
                    Browse projects across multiple segments to find inspiration tailored to your needs.
                </p>

                <div class="flex items-center justify-start lg:justify-center gap-3 overflow-x-auto px-4 pb-4 scrollbar-hide snap-x snap-mandatory">
                    <a href="{{ route('projects.all', ['category' => 'all']) }}" class="text-xs lg:text-base px-3 lg:px-6 py-2 {{ $category === 'all' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition whitespace-nowrap snap-start">
                        All Projects
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'event']) }}" class="text-xs lg:text-base px-3 lg:px-6 py-2 {{ $category === 'event' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition whitespace-nowrap snap-start">
                        Corporate Event
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'wedding']) }}" class="text-xs lg:text-base px-3 lg:px-6 py-2 {{ $category === 'wedding' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition whitespace-nowrap snap-start">
                        Wedding
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'modelling']) }}" class="text-xs lg:text-base px-3 lg:px-6 py-2 {{ $category === 'modelling' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition whitespace-nowrap snap-start">
                        3D Modelling
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'graphic']) }}" class="text-xs lg:text-base px-3 lg:px-6 py-2 {{ $category === 'graphic' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition whitespace-nowrap snap-start">
                        Graphic Design
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6">
                
                @forelse($projects as $project)
                <a href="{{ route('projects.show', ['type' => $project->type, 'id' => $project->id]) }}" class="group cursor-pointer">
                    <div class="relative h-44 sm:h-56 lg:h-64 rounded-2xl overflow-hidden mb-2 shadow-lg">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>

                    <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                        {{ $project->category }}
                    </span>

                    <h3 class="text-sm sm:text-base lg:text-lg font-semibold text-gray-900 group-hover:text-red-600 transition">
                        {{ $project->title }}
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-600">
                        {{ $project->client ?? '' }} {{ \Carbon\Carbon::parse($project->date)->format('M Y') }}
                    </p>
                </a>
                @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-500 text-lg">No projects found in this category.</p>
                </div>
                @endforelse

            </div>

        </div>
    </section>
</x-app-layout>