<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6 p-3 mt-16">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">Manage Team Members</h1>
                    <a href="{{ route('admin.team.create') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition inline-flex items-center">
                        <i class="bi bi-plus-circle mr-2"></i> Add New Member
                    </a>
                </div>

                <div id="sortable-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
                    @forelse($contents as $content)
                    <div class="team-card bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow cursor-move border-2 border-transparent hover:border-red-300" data-id="{{ $content->id }}">
                        <!-- Drag Handle -->
                        <div class="bg-gray-100 p-2 rounded-t-lg flex items-center justify-between">
                            <div class="flex items-center text-gray-600">
                                <i class="bi bi-grip-vertical text-xl mr-2"></i>
                                <span class="text-xs font-semibold">Order: {{ $content->order }}</span>
                            </div>
                            @if($content->is_active)
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Inactive</span>
                            @endif
                        </div>

                        <!-- Image -->
                        <div class="relative h-48 bg-gray-200">
                            @if($content->image)
                                <img src="{{ asset('storage/'.$content->image) }}" alt="{{ $content->name }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-300">
                                    <i class="bi bi-person text-6xl text-gray-400"></i>
                                </div>
                            @endif
                        </div>

                        <!-- Info -->
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-900 truncate">{{ $content->name }}</h3>
                            <p class="text-sm text-gray-600 truncate mb-3">{{ $content->position }}</p>

                            <!-- Social Links Preview -->
                            <div class="flex gap-2 mb-3">
                                @if($content->instagram_url)
                                    <span class="text-xs bg-pink-100 text-pink-700 px-2 py-1 rounded">
                                        <i class="bi bi-instagram"></i>
                                    </span>
                                @endif
                                @if($content->linkedin_url)
                                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded">
                                        <i class="bi bi-linkedin"></i>
                                    </span>
                                @endif
                            </div>

                            <!-- Actions -->
                            <div class="flex gap-2">
                                <a href="{{ route('admin.team.edit', $content->id) }}" class="flex-1 bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600 transition text-center text-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <button onclick="showModal('{{ $content->id }}')" class="flex-1 bg-red-500 text-white py-2 rounded hover:bg-red-600 transition text-sm">
                                    <i class="bi bi-trash3"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <i class="bi bi-people text-6xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500 text-lg">No team members found.</p>
                        <a href="{{ route('admin.team.create') }}" class="inline-block mt-4 bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 transition">
                            Add Your First Team Member
                        </a>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                        <i class="bi bi-exclamation-triangle text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Delete Team Member</h3>
                    <div class="mt-2 px-7 py-3">
                        <p class="text-sm text-gray-500">Are you sure you want to delete this team member? This action cannot be undone.</p>
                    </div>
                    <div class="items-center px-4 py-3 flex gap-2 justify-center">
                        <button onclick="hideModal()" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-gray-600 transition">
                            Cancel
                        </button>
                        <form id="deleteForm" action="" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

    <script>
        function showModal(contentId) {
            document.getElementById('deleteForm').action = `/admin/team/${contentId}`;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const grid = document.getElementById('sortable-grid');
            
            if (grid && grid.children.length > 0) {
                const sortable = new Sortable(grid, {
                    animation: 150,
                    ghostClass: 'bg-red-100',
                    dragClass: 'opacity-50',
                    handle: '.team-card',
                    onEnd: function(evt) {
                        const items = grid.querySelectorAll('.team-card');
                        const orders = Array.from(items).map(item => parseInt(item.dataset.id));
                        
                        console.log('New order:', orders);
                        
                        // Update order via AJAX
                        updateOrder(orders);
                    }
                });
            }
        });

        function updateOrder(orders) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '{{ csrf_token() }}';
            
            fetch('{{ route("admin.team.updateOrder") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ orders: orders })
            })
            .then(response => {
                // Check if response is JSON
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    throw new Error('Server did not return JSON. Check your route and controller.');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Show success notification
                    showNotification('Order updated successfully!', 'success');
                    
                    // Update order numbers in UI
                    const items = document.querySelectorAll('.team-card');
                    items.forEach((item, index) => {
                        const orderSpan = item.querySelector('.text-xs.font-semibold');
                        if (orderSpan) {
                            orderSpan.textContent = 'Order: ' + index;
                        }
                    });
                } else {
                    showNotification(data.message || 'Failed to update order', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Failed to update order: ' + error.message, 'error');
            });
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