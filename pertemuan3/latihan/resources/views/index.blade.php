<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <h1 class="text-3xl font-bold mb-6">Daftar Kategori</h1>

    <ul class="list-disc pl-6 space-y-2">
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
</x-layout>
