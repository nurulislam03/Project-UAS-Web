<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Prestasi') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('message')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('tambah-prestasi') }}" method="POST">
                    @csrf
                    <div>
                        <x-input-label for="nama" :value="__('Nama Siswa')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="kelas" :value="__('Kelas')" />
                        <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="old('kelas')" required autofocus />
                        <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="prestasi" :value="__('Prestasi')" />
                        <x-text-input id="prestasi" class="block mt-1 w-full" type="text" name="prestasi" :value="old('prestasi')" required autofocus />
                        <x-input-error :messages="$errors->get('prestasi')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="tingkat" :value="__('Tingkat')" />
                        <x-text-input id="tingkat" class="block mt-1 w-full" type="text" name="tingkat" :value="old('tingkat')" required autofocus />
                        <x-input-error :messages="$errors->get('tingkat')" class="mt-2" />
                    </div>
                    <div>
                        <x-primary-button class="ml-3">{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
