<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">ID</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Nama</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Kelas</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Jurusan</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Edit</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($daftarsiswa as $siswa)
                        <tr>
                            <td>{{ $siswa->id }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->jurusan }}</td>
                            <td>
                                <a href="{{ url('/edit-siswa/'.$siswa->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('delete-siswa/'.$siswa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6"> No Record Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
