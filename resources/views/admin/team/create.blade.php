<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-6 space-y-6 p-6 mt-16">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <a href="{{ route('admin.team.index') }}" class="inline-flex items-center px-4 py-2 bg-red-500 border border-red-500 text-white rounded-md mb-4 hover:bg-transparent hover:text-red-500 transition">
                    <i class="bi bi-arrow-left mr-2"></i> Back to Team List
                </a>
                
                <h1 class="text-2xl font-bold mb-6">Add New Team Member</h1>
                
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    value="{{ old('name') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                    placeholder="e.g. Muhammad Gilang"
                                    required>
                            </div>

                            <div>
                                <label for="position" class="block text-sm font-medium text-gray-700 mb-2">
                                    Position/Title <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    name="position" 
                                    id="position" 
                                    value="{{ old('position') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                    placeholder="e.g. Founder & CEO"
                                    required>
                            </div>

                            <div>
                                <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                                    Display Order <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="number" 
                                    name="order" 
                                    id="order" 
                                    value="{{ old('order', $nextOrder) }}"
                                    min="0"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                    required>
                                <p class="mt-1 text-sm text-gray-500">Current next available order: <strong>{{ $nextOrder }}</strong></p>
                            </div>

                            <div class="pt-2">
                                <label class="flex items-center">
                                    <input 
                                        type="checkbox" 
                                        name="is_active" 
                                        id="is_active" 
                                        {{ old('is_active', true) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-500 focus:ring-red-500">
                                    <span class="ml-2 text-sm text-gray-700">Active (Display on website)</span>
                                </label>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                                    Profile Image
                                </label>
                                <input 
                                    type="file" 
                                    name="image" 
                                    id="image" 
                                    accept="image/*"
                                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100">
                                <p class="mt-1 text-sm text-gray-500">Recommended: Square image (1:1 ratio), max 2MB.</p>
                                
                                <div id="imagePreview" class="mt-4 hidden">
                                    <p class="text-sm text-gray-600 mb-2">Preview:</p>
                                    <img src="" alt="Preview" class="w-48 h-48 rounded-lg object-cover border-2 border-gray-300 shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">
                            <i class="bi bi-share mr-2"></i>Social Media Links
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="instagram_url" class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="bi bi-instagram text-pink-600 mr-1"></i> Instagram Profile URL
                                </label>
                                <input 
                                    type="url" 
                                    name="instagram_url" 
                                    id="instagram_url" 
                                    value="{{ old('instagram_url') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                    placeholder="https://instagram.com/username">
                                <p class="mt-1 text-sm text-gray-500">Optional - Full Instagram profile URL</p>
                            </div>

                            <div>
                                <label for="linkedin_url" class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="bi bi-linkedin text-blue-600 mr-1"></i> LinkedIn Profile URL
                                </label>
                                <input 
                                    type="url" 
                                    name="linkedin_url" 
                                    id="linkedin_url" 
                                    value="{{ old('linkedin_url') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                    placeholder="https://linkedin.com/in/username">
                                <p class="mt-1 text-sm text-gray-500">Optional - Full LinkedIn profile URL</p>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex gap-3 mt-8 pt-6 border-t border-gray-200">
                        <button type="submit" class="px-6 py-3 bg-red-500 border border-red-500 text-white rounded-md hover:bg-transparent hover:text-red-500 transition font-semibold">
                            <i class="bi bi-save mr-2"></i> Save Team Member
                        </button>
                        <a href="{{ route('admin.team.index') }}" class="px-6 py-3 bg-gray-500 border border-gray-500 text-white rounded-md hover:bg-transparent hover:text-gray-500 transition font-semibold">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagePreview');
                    preview.querySelector('img').src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>