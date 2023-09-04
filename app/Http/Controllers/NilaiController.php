<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        // Mengambil data yang dibutuhkan, seperti daftar mata pelajaran, guru, siswa, dan kelas
        $mataPelajaran = MataPelajaran::all();
        $guru = Guru::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();

        return view('nilai.create', compact('mataPelajaran', 'guru', 'siswa', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mata_pelajaran_id' => 'required',
            'guru_id' => 'required',
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'semester' => 'required',
            'nilai' => 'required',
        ]);

        Nilai::create([
            'mata_pelajaran_id' => $request->input('mata_pelajaran_id'),
            'guru_id' => $request->input('guru_id'),
            'siswa_id' => $request->input('siswa_id'),
            'kelas_id' => $request->input('kelas_id'),
            'semester' => $request->input('semester'),
            'nilai' => $request->input('nilai'),
        ]);

        return redirect()->route('nilai.index')->with('success', 'Data Nilai telah ditambahkan.');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        $mataPelajaran = MataPelajaran::all();
        $guru = Guru::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();

        return view('nilai.edit', compact('nilai', 'mataPelajaran', 'guru', 'siswa', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mata_pelajaran_id' => 'required',
            'guru_id' => 'required',
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'semester' => 'required',
            'nilai' => 'required',
        ]);

        $nilai = Nilai::find($id);
        $nilai->update([
            'mata_pelajaran_id' => $request->input('mata_pelajaran_id'),
            'guru_id' => $request->input('guru_id'),
            'siswa_id' => $request->input('siswa_id'),
            'kelas_id' => $request->input('kelas_id'),
            'semester' => $request->input('semester'),
            'nilai' => $request->input('nilai'),
        ]);

        return redirect()->route('nilai.index')->with('success', 'Data Nilai telah diperbarui.');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Data Nilai telah dihapus.');
    }
}
