<?php

namespace App\Http\Controllers;

use App\Models\DaftarSiswa;
use Illuminate\Http\Request;
use App\Http\Requests\DaftarSiswaFormRequest;

class DaftarSiswaController extends Controller
{
    public function index()
    {
        $daftarsiswa = DaftarSiswa::all();
        return view('daftar-siswa.index',compact('daftarsiswa'));
    }
    public function create()
    {
        return view('daftar-siswa.create');
    }
    public function store(DaftarSiswaFormRequest $request)
    {
        $data = $request->validated();

        $siswa = DaftarSiswa::create($data);
        return redirect('/daftar-siswa')->with('message', 'Siswa Berhasil Ditambahkan');
    }
    public function edit($siswa_id)
    {
        $siswa = DaftarSiswa::find($siswa_id);

        return view('daftar-siswa.edit', compact('siswa'));
    }
    public function update(DaftarSiswaFormRequest $request, $siswa_id)
    {
        $data = $request->validated();

        $siswa = DaftarSiswa::where('id', $siswa_id)->update([
            'nama' => $data['nama'],
            'kelas' => $data['kelas'],
            'jurusan' => $data['jurusan']
        ]);
        
        return redirect('/daftar-siswa')->with('message', 'Siswa Berhasil Diupdate');
    }
    public function destroy($siswa_id)
    {
        $siswa = DaftarSiswa::find($siswa_id)->delete();
        return redirect('/daftar-siswa')->with('message', 'Siswa Berhasil Dihapus');
    }
}
