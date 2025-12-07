<!-- resources/views/admin/wedding/create.blade.php -->
<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6 p-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <!-- Back Button -->
                <a href="{{ route('admin.home.index') }}" class="inline-flex items-center px-4 py-2 bg-red border text-white rounded-md mb-4 hover:border-red-500 hover:bg-transparent hover:text-red-500 transition">
                    <i class="bi bi-arrow-left mr-2"></i> Back
                </a>
                <h1 class="text-2xl font-bold mb-4">Add New Content</h1>
                

                <form action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" required>
                    </div>
        
                    <!-- Client Field -->
                    <div class="mb-4">
                        <label for="client" class="block text-sm font-medium text-gray-700">Client</label>
                        <input type="text" name="client" id="client" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" required>
                    </div>
        
                    <!-- Date Field -->
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" name="date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" required>
                    </div>
        
                    <!-- Image Field -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    </div>
        
                    <!-- Submit Button -->
                    <button type="submit" class="px-4 py-2 bg-red border text-white rounded-md mb-4 hover:border-red-500 hover:bg-transparent hover:text-red-500 transition">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
