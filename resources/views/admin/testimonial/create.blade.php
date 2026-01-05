<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6 p-6 mt-16">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <!-- Back Button -->
                <a href="{{ route('admin.testimonial.index') }}" class="inline-flex items-center px-4 py-2 bg-red-500 border border-red-500 text-white rounded-md mb-4 hover:bg-transparent hover:text-red-500 transition">
                    <i class="bi bi-arrow-left mr-2"></i> Back
                </a>
                
                <h1 class="text-2xl font-bold mb-6">Add New Testimonial</h1>
                
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Quote Field -->
                    <div class="mb-4">
                        <label for="quote" class="block text-sm font-medium text-gray-700 mb-2">
                            Testimonial Quote <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            name="quote" 
                            id="quote" 
                            rows="4"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                            placeholder="Enter the testimonial quote..."
                            required>{{ old('quote') }}</textarea>
                        <p class="mt-1 text-sm text-gray-500">The main testimonial text that will be displayed.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Name Field -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                value="{{ old('name') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                placeholder="e.g. John Doe"
                                required>
                        </div>

                        <!-- Position Field -->
                        <div class="mb-4">
                            <label for="position" class="block text-sm font-medium text-gray-700 mb-2">
                                Position/Title <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="position" 
                                id="position" 
                                value="{{ old('position') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                placeholder="e.g. CEO, Marketing Director"
                                required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Company Field -->
                        <div class="mb-4">
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">
                                Company <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="company" 
                                id="company" 
                                value="{{ old('company') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                placeholder="e.g. PT Teknologi Indonesia"
                                required>
                        </div>

                        <!-- Order Field -->
                        <div class="mb-4">
                            <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                                Display Order
                            </label>
                            <input 
                                type="number" 
                                name="order" 
                                id="order" 
                                value="{{ old('order', 0) }}"
                                min="0"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                placeholder="0">
                            <p class="mt-1 text-sm text-gray-500">Lower numbers appear first (0 = first position).</p>
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="mb-4">
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
                        
                        <div id="imagePreview" class="mt-3 hidden">
                            <img src="" alt="Preview" class="w-24 h-24 rounded-full object-cover border-2 border-gray-300">
                        </div>
                    </div>

                    <!-- Active Status -->
                    <div class="mb-6">
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

                    <!-- Submit Button -->
                    <div class="flex gap-3">
                        <button type="submit" class="px-6 py-2 bg-red-500 border border-red-500 text-white rounded-md hover:bg-transparent hover:text-red-500 transition">
                            <i class="bi bi-save mr-2"></i> Save Testimonial
                        </button>
                        <a href="{{ route('admin.testimonial.index') }}" class="px-6 py-2 bg-gray-500 border border-gray-500 text-white rounded-md hover:bg-transparent hover:text-gray-500 transition">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Image Preview
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