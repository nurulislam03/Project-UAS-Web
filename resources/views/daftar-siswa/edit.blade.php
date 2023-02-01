<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update-siswa/'.$siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="nama" :value="__('Nama Siswa')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="$siswa->nama" required autofocus />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="kelas" :value="__('Kelas')" />
                        <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="$siswa->kelas" required autofocus />
                        <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="jurusan" :value="__('Jurusan')" />
                        <x-text-input id="jurusan" class="block mt-1 w-full" type="text" name="jurusan" :value="$siswa->jurusan" required autofocus />
                        <x-input-error :messages="$errors->get('jurusan')" class="mt-2" />
                    </div>
                    <div>
                        <x-primary-button class="ml-3">{{ __('Update') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
