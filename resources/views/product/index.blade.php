<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('success'))
        <div class="alert p-5 bg-white rounded text-green">
            {{ session('success') }}
        </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="actions flex justify-end mb-5">
                <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Product</a>
            </div>
            <div class="mt-5 bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
                list Product disini
            </div>
        </div>
    </div>
</x-app-layout>
