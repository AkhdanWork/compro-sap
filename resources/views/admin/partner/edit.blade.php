<!-- resources/views/admin/partner/edit.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Partner</h1>
        <form action="{{ route('admin.partner.update', $partnerContent->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" value="{{ $partnerContent->title }}" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                @if($partnerContent->image)
                    <img src="{{ asset('storage/' . $partnerContent->image) }}" alt="{{ $partnerContent->title }}" width="100" class="mt-2">
                @endif
            </div>
            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md">Save</button>
        </form>
    </div>
</x-app-layout>
