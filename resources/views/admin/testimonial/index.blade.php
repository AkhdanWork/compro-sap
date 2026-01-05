<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6 p-3 mt-16">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">Manage Testimonials</h1>
                    <a href="{{ route('admin.testimonial.create') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition inline-flex items-center">
                        <i class="bi bi-plus-circle mr-2"></i> Add New Member
                    </a>
                </div>

                <div class="overflow-x-auto mt-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quote</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="sortable-testimonial" class="bg-white divide-y divide-gray-200">
                            @forelse($contents as $content)
                            <tr data-id="{{ $content->id }}" class="cursor-move">
                                <td class="px-4 py-3 text-sm text-gray-900 flex items-center gap-2">
                                    <i class="bi bi-grip-vertical text-gray-400"></i>
                                    {{ $content->order }}
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    @if($content->image)
                                        <img src="{{ asset('storage/'.$content->image) }}" alt="{{ $content->name }}" class="w-12 h-12 rounded-full object-cover">
                                    @else
                                        <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                                            <i class="bi bi-person text-gray-400"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $content->name }}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">{{ $content->position }}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">{{ $content->company }}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="max-w-xs truncate">{{ Str::limit($content->quote, 50) }}</div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @if($content->is_active)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Inactive</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.testimonial.edit', $content->id) }}">
                                            <button class="bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600 transition">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>
                                        <button onclick="showModal('{{ $content->id }}')" class="bg-red-500 text-white p-2 rounded hover:bg-red-600 transition">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="px-4 py-8 text-center text-gray-500">No testimonials found. Add your first testimonial!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Delete Confirmation</h3>
                    <div class="mt-2 px-7 py-3">
                        <p class="text-sm text-gray-500">Are you sure you want to delete this testimonial?</p>
                    </div>
                    <div class="items-center px-4 py-3">
                        <button onclick="hideModal()" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-gray-600 transition mr-2">
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
            document.getElementById('deleteForm').action = '/admin/testimonial/' + contentId;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
        document.addEventListener('DOMContentLoaded', function () {
        const tbody = document.getElementById('sortable-testimonial');

        if (!tbody) return;

        new Sortable(tbody, {
            animation: 150,
            ghostClass: 'bg-red-100',
            handle: '.bi-grip-vertical',
            onEnd() {
                const orders = Array.from(tbody.querySelectorAll('tr'))
                    .map(row => parseInt(row.dataset.id));

                updateTestimonialOrder(orders);
            }
        });
    });

    function updateTestimonialOrder(orders) {
    fetch('{{ route("admin.testimonial.updateOrder") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ orders })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            showNotification('Order updated successfully!', 'success');

            // 🔥 UPDATE UI TANPA RELOAD
            document.querySelectorAll('#sortable-testimonial tr')
                .forEach((row, index) => {
                    const orderCell = row.querySelector('td');
                    orderCell.innerHTML = `
                        <i class="bi bi-grip-vertical text-gray-400 mr-2"></i>
                        ${index}
                    `;
                });

        } else {
            showNotification(data.message || 'Failed to update order', 'error');
        }
    })
    .catch(err => {
        console.error(err);
        showNotification('Failed to update order', 'error');
        });
    }

    </script>
</x-app-layout>