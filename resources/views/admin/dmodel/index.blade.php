<!-- resources/views/admin/dmodel/index.blade.php -->
<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6 p-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold mb-4">Manage 3D Modelling Content</h1>
                <a href="{{ route('admin.dmodel.create') }}" class="bg-red-500 text-white px-4 py-2 rounded">Add New Content</a>
        
                @if(session('success'))
                    <div class="bg-green-500 text-white p-3 rounded mt-4">{{ session('success') }}</div>
                @endif
        
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($contents as $content)
                            <tr>
                                <td class="px-2 py-2 text-sm font-medium text-gray-900 text-left">{{ $content->title }}</td>
                                <td class="px-2 py-2 text-sm text-gray-500 text-left">{{ $content->client }}</td>
                                <td class="px-2 py-2 text-sm text-gray-500 text-left">{{ \Carbon\Carbon::parse($content->date)->format('d-m-Y') }}</td>
                                <td class="px-2 py-2 text-sm text-gray-500">
                                    <img src="{{ asset('storage/'.$content->image) }}" alt="{{ $content->title }}" class="w-24 h-auto">
                                </td>
                                <td class="px-2 py-2 text-sm text-gray-500 grid grid-cols-2 gap-4 justify-items-left">
                                    <a href="{{ route('admin.dmodel.edit', $content->id) }}" class="">
                                    <button class="bg-yellow-500 text-white p-3 rounded"><i class="bi bi-pencil"></i></button>
                                    </a>
                                    <a class="">
                                        <button onclick="showModal({{ $content->id }})" class="bg-red-500 text-white p-3 rounded"><i class="bi bi-trash3"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
    
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Delete Confirmation</h3>
                <div class="mt-2">
                    @if(isset($content) && $content->image)
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/'.$content->image) }}" alt="{{ $content->title }}" class="w-24 h-auto">
                        </div>
                    @endif
                    <p class="text-sm text-gray-500">Are you sure you want to delete this item?</p>
                </div>
                <div class="mt-4">
                    <button onclick="hideModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <form id="deleteForm" action="" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showModal(contentId) {
            document.getElementById('deleteForm').action = `/admin/dmodel/${contentId}`;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
