<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6 p-3 mt-16">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">Manage Wedding Organizer Content</h1>
                    <a href="{{ route('admin.wedding.create') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition inline-flex items-center">
                        <i class="bi bi-plus-circle mr-2"></i> Add New Content
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
                    @forelse($contents as $content)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow border border-gray-200">
                        <div class="relative h-48 bg-gray-200 rounded-t-lg">
                            @if($content->image)
                                <img src="{{ asset('storage/'.$content->image) }}" 
                                     alt="{{ $content->title }}" 
                                     class="w-full h-full object-cover rounded-t-lg">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-300 rounded-t-lg">
                                    <i class="bi bi-image text-6xl text-gray-400"></i>
                                </div>
                            @endif
                            
                            <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-xs">
                                {{ \Carbon\Carbon::parse($content->date)->format('d M Y') }}
                            </div>
                        </div>

                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-900 truncate mb-1">{{ $content->title }}</h3>
                            <p class="text-sm text-gray-600 truncate mb-2">
                                <i class="bi bi-person mr-1"></i>{{ $content->client }}
                            </p>
                            
                            @if($content->description)
                                <p class="text-xs text-gray-500 line-clamp-2 mb-3">{{ $content->description }}</p>
                            @endif

                            <div class="flex gap-2 mt-3 pt-3 border-t border-gray-200">
                                <a href="{{ route('admin.wedding.edit', $content->id) }}" 
                                   class="flex-1 bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600 transition text-center text-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <button onclick="showModal('{{ $content->id }}')" 
                                        class="flex-1 bg-red-500 text-white py-2 rounded hover:bg-red-600 transition text-sm">
                                    <i class="bi bi-trash3"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <i class="bi bi-heart text-6xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500 text-lg">No wedding content found.</p>
                        <a href="{{ route('admin.wedding.create') }}" 
                           class="inline-block mt-4 bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 transition">
                            Add Your First Wedding Content
                        </a>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                    <i class="bi bi-exclamation-triangle text-2xl text-red-600"></i>
                </div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Delete Wedding Content</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">Are you sure you want to delete this wedding content? This action cannot be undone.</p>
                </div>
                <div class="items-center px-4 py-3 flex gap-2 justify-center">
                    <button onclick="hideModal()" 
                            class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-gray-600 transition">
                        Cancel
                    </button>
                    <form id="deleteForm" action="" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-red-600 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                showNotification(@json(session('success')), 'success');
            });
        </script>
    @endif

    <script>
        function showModal(contentId) {
            document.getElementById('deleteForm').action = `/admin/wedding/${contentId}`;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
        function showNotification(message, type) {
            const notification = document.createElement('div');
            const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
            notification.className = 'fixed top-20 right-4 px-6 py-3 rounded shadow-lg z-50 ' + bgColor + ' text-white';
            notification.innerHTML = '<i class="bi bi-' + (type === 'success' ? 'check-circle' : 'x-circle') + ' mr-2"></i>' + message;
            document.body.appendChild(notification);
            
            setTimeout(function() {
                notification.remove();
            }, 3000);
        }
    </script>
</x-app-layout>