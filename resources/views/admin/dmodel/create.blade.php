<!-- resources/views/admin/wedding/create.blade.php -->
<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-6 space-y-6 p-6 mt-16">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <a href="{{ route('admin.dmodel.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-red-500 border border-red-500 text-white rounded-md mb-4 hover:bg-transparent hover:text-red-500 transition">
                    <i class="bi bi-arrow-left mr-2"></i> Back to 3D Model List
                </a>
                
                <h1 class="text-2xl font-bold mb-6">Add New 3D Model Content</h1>
                
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.dmodel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Event Title <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="title" 
                                       id="title" 
                                       value="{{ old('title') }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                       placeholder="e.g. The White House"
                                       required>
                            </div>

                            <div>
                                <label for="client" class="block text-sm font-medium text-gray-700 mb-2">
                                    Client Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="client" 
                                       id="client" 
                                       value="{{ old('client') }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                       placeholder="e.g. John Doe"
                                       required>
                            </div>

                            <div>
                                <label for="date" class="block text-sm font-medium text-gray-700 mb-2">
                                    Event Date <span class="text-red-500">*</span>
                                </label>
                                <input type="date" 
                                       name="date" 
                                       id="date" 
                                       value="{{ old('date') }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                       required>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                                    Event Image
                                </label>
                                <input type="file" 
                                       name="image" 
                                       id="image" 
                                       accept="image/*"
                                       class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100">
                                <p class="mt-1 text-sm text-gray-500">Recommended: 1200px width, max 2MB.</p>
                                
                                <div id="imagePreview" class="mt-4 hidden">
                                    <p class="text-sm text-gray-600 mb-2">Preview:</p>
                                    <img src="" alt="Preview" class="w-full h-48 rounded-lg object-cover border-2 border-gray-300 shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description <span class="text-red-500">*</span>
                        </label>
                        <textarea name="description" 
                                  id="description" 
                                  rows="4"
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" 
                                  placeholder="Enter event description, venue, theme, or any special details..."
                                  required>{{ old('description') }}</textarea>
                    </div>

                    <div class="flex gap-3 mt-8 pt-6 border-t border-gray-200">
                        <button type="submit" 
                                class="px-6 py-3 bg-red-500 border border-red-500 text-white rounded-md hover:bg-transparent hover:text-red-500 transition font-semibold">
                            <i class="bi bi-save mr-2"></i> Save 3D Model Content
                        </button>
                        <a href="{{ route('admin.dmodel.index') }}" 
                           class="px-6 py-3 bg-gray-500 border border-gray-500 text-white rounded-md hover:bg-transparent hover:text-gray-500 transition font-semibold">
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