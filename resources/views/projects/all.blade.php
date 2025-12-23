<x-app-layout>
    <section class="bg-white py-16 lg:py-24">
        <div class="container w-9/12 mx-auto">
            
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2 mb-4">
                    <div class="w-2 h-2 bg-red-600"></div>
                    <p class="text-gray-400 font-semibold text-sm uppercase tracking-wider">ALL PROJECTS</p>
                </div>

                <h1 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Our Complete Portfolio
                </h1>

                <p class="text-base lg:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                    Explore our full range of work across different event types and industries.
                </p>

                <div class="flex flex-wrap justify-center gap-3">
                    <a href="{{ route('projects.all', ['category' => 'all']) }}" class="px-6 py-2 {{ $category === 'all' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition">
                        All Projects
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'event']) }}" class="px-6 py-2 {{ $category === 'event' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition">
                        Corporate Event
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'wedding']) }}" class="px-6 py-2 {{ $category === 'wedding' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition">
                        Wedding
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'modelling']) }}" class="px-6 py-2 {{ $category === 'modelling' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition">
                        3D Modelling
                    </a>
                    <a href="{{ route('projects.all', ['category' => 'graphic']) }}" class="px-6 py-2 {{ $category === 'graphic' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700' }} rounded-full font-semibold hover:bg-red-700 hover:text-white transition">
                        Graphic Design
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                @forelse($projects as $project)
                <a href="{{ route('projects.show', $project->id) }}" class="group cursor-pointer">
                    <div class="relative h-64 rounded-2xl overflow-hidden mb-4 shadow-lg">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>

                    <div class="mb-3">
                        <span class="text-xs font-semibold text-red-600 uppercase tracking-wider">
                            {{ $project->category }}
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition">
                        {{ $project->title }}
                    </h3>

                    <p class="text-sm text-gray-600 leading-relaxed">
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