<!-- resources/views/admin/partner/index.blade.php -->
<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Partner Content</h1>
        <a href="{{ route('admin.partner.create') }}" class="bg-red text-white px-4 py-2 rounded">Add New Partner</a>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mt-4">{{ session('success') }}</div>
        @endif

        <table class="min-w-full divide-y divide-gray-200 mt-4">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($contents as $content)
                <tr>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $content->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        @if($content->image)
                            <img src="{{ asset('storage/'.$content->image) }}" alt="{{ $content->title }}" width="100">
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        <a href="{{ route('admin.partner.edit', $content->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('admin.partner.destroy', $content->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
