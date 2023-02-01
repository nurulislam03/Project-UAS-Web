<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Http\Requests\PrestasiFormRequest;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index',compact('prestasi'));
    }
    public function create()
    {
        return view('prestasi.create');
    }
    public function store(PrestasiFormRequest $request)
    {
        $data = $request->validated();

        $prestasi = Prestasi::create($data);
        return redirect('/prestasi')->with('message', 'Prestasi Berhasil Ditambahkan');
    }
    public function edit($prestasi_id)
    {
        $prestasi = Prestasi::find($prestasi_id);

        return view('prestasi.edit', compact('prestasi'));
    }
    public function update(PrestasiFormRequest $request, $prestasi_id)
    {
        $data = $request->validated();

        $prestasi = Prestasi::where('id', $prestasi_id)->update([
            'nama' => $data['nama'],
            'kelas' => $data['kelas'],
            'prestasi' => $data['prestasi'],
            'tingkat' => $data['tingkat']
        ]);
        
        return redirect('/prestasi')->with('message', 'Prestasi Berhasil Diupdate');
    }
    public function destroy($prestasi_id)
    {
        $prestasi = Prestasi::find($prestasi_id)->delete();
        return redirect('/prestasi')->with('message', 'Prestasi Berhasil Dihapus');
    }
}
