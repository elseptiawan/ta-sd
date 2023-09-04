<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mataPelajaran = MataPelajaran::all();
        return view('mata_pelajaran.index', compact('mataPelajaran'));
    }

    public function create()
    {
        return view('mata_pelajaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required',
            'nama_matapel' => 'required',
            'deskripsi' => 'nullable',
        ]);

        MataPelajaran::create([
            'guru_id' => $request->input('guru_id'),
            'nama_matapel' => $request->input('nama_matapel'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran telah ditambahkan.');
    }

    public function edit($id)
    {
        $mataPelajaran = MataPelajaran::find($id);
        return view('mata_pelajaran.edit', compact('mataPelajaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'guru_id' => 'required',
            'nama_matapel' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $mataPelajaran = MataPelajaran::find($id);
        $mataPelajaran->update([
            'guru_id' => $request->input('guru_id'),
            'nama_matapel' => $request->input('nama_matapel'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran telah diperbarui.');
    }

    public function destroy($id)
    {
        $mataPelajaran = MataPelajaran::find($id);
        $mataPelajaran->delete();

        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran telah dihapus.');
    }
}
