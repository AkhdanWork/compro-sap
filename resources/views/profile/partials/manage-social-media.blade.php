<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Social Media Links') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Manage your social media links that appear in the footer.') }}
        </p>
    </header>

    @if (session('status') === 'social-media-added')
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
            {{ __('Social media added successfully.') }}
        </div>
    @endif

    @if (session('status') === 'social-media-updated')
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
            {{ __('Social media updated successfully.') }}
        </div>
    @endif

    @if (session('status') === 'social-media-deleted')
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
            {{ __('Social media deleted successfully.') }}
        </div>
    @endif

    <div class="mt-6 space-y-6">
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
            <h3 class="text-sm font-semibold text-gray-700 mb-3">Add New Social Media</h3>
            
            <form method="post" action="{{ route('profile.social-media.store') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="platform" class="block text-sm font-medium text-gray-700">Platform Name</label>
                    <input type="text" name="platform" id="platform" 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                           placeholder="e.g. Instagram, Facebook, WhatsApp" required>
                </div>

                <div>
                    <label for="url" class="block text-sm font-medium text-gray-700">URL Link</label>
                    <input type="url" name="url" id="url" 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                           placeholder="https://instagram.com/yourpage" required>
                </div>

                <div>
                    <label for="icon_svg" class="block text-sm font-medium text-gray-700">Icon SVG Code</label>
                    <textarea name="icon_svg" id="icon_svg" rows="3"
                              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm font-mono text-xs" 
                              placeholder='<svg class="w-5 h-5" fill="currentColor">...</svg>' required></textarea>
                    <p class="mt-1 text-xs text-gray-500">Get SVG icons from <a href="https://heroicons.com" target="_blank" class="text-red-600 hover:underline">Heroicons</a> or <a href="https://icons.getbootstrap.com" target="_blank" class="text-red-600 hover:underline">Bootstrap Icons</a></p>
                </div>

                <button type="submit" class="w-full px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition">
                    <i class="bi bi-plus-circle mr-2"></i> Add Social Media
                </button>
            </form>
        </div>

        <div class="space-y-4">
            <h3 class="text-sm font-semibold text-gray-700">Existing Social Media</h3>
            
            @forelse($socialMedia as $social)
            <div class="bg-white border border-gray-200 rounded-lg p-4" x-data="{ editing: false }">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3 flex-1">
                        <div class="flex-shrink-0">
                            {!! $social->icon_svg !!}
                        </div>
                        <div class="flex-1" x-show="!editing">
                            <h4 class="font-semibold text-gray-900">{{ $social->platform }}</h4>
                            <a href="{{ $social->url }}" target="_blank" class="text-sm text-blue-600 hover:underline truncate block">
                                {{ $social->url }}
                            </a>
                        </div>
                        
                        <form x-show="editing" method="post" action="{{ route('profile.social-media.update', $social) }}" class="flex-1 space-y-3">
                            @csrf
                            @method('PUT')
                            
                            <input type="text" name="platform" value="{{ $social->platform }}"
                                   class="block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" required>
                            
                            <input type="url" name="url" value="{{ $social->url }}"
                                   class="block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" required>
                            
                            <textarea name="icon_svg" rows="2"
                                      class="block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm font-mono text-xs" required>{{ $social->icon_svg }}</textarea>
                            
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" {{ $social->is_active ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-500 focus:ring-red-500">
                                <span class="ml-2 text-sm text-gray-700">Active</span>
                            </label>
                            
                            <div class="flex gap-2">
                                <button type="submit" class="px-3 py-1 bg-green-500 text-white text-sm rounded hover:bg-green-600">
                                    Save
                                </button>
                                <button type="button" @click="editing = false" class="px-3 py-1 bg-gray-500 text-white text-sm rounded hover:bg-gray-600">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="flex items-center gap-2 ml-4" x-show="!editing">
                        <span class="px-2 py-1 text-xs rounded {{ $social->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $social->is_active ? 'Active' : 'Inactive' }}
                        </span>
                        
                        <button @click="editing = true" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded">
                            <i class="bi bi-pencil"></i>
                        </button>
                        
                        <form method="post" action="{{ route('profile.social-media.destroy', $social) }}" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-8 text-gray-500">
                <i class="bi bi-share text-4xl mb-2"></i>
                <p>No social media links yet. Add your first one above!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>