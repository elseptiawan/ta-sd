<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // Membuat pengguna (user)
        $user = new User;
        $user->name = $request->input('nama');
        $user->email = $request->input('user_id'); // Atur email sesuai kebutuhan
        $user->password = bcrypt($request->input('nomor_induk')); // Anda dapat mengenkripsi password sesuai kebutuhan
        $user->save();

        // Membuat siswa dan menghubungkannya dengan pengguna
        $siswa = new Siswa;
        $siswa->user_id = $user->id;
        $siswa->nama = $request->input('nama');
        $siswa->kelas_id = $request->input('kelas_id');
        $siswa->nomor_induk = $request->input('nomor_induk');
        $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $siswa->alamat = $request->input('alamat');
        $siswa->jenis_kelamin = $request->input('jenis_kelamin');
        $siswa->agama = $request->input('agama');
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Siswa telah dibuat.');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        // Mendapatkan siswa yang akan diperbarui
        $siswa = Siswa::find($id);

        // Memperbarui data pengguna (user)
        $user = User::find($siswa->user_id);
        $user->name = $request->input('nama');
        // Anda dapat memperbarui email atau password sesuai kebutuhan
        $user->save();

        // Memperbarui data siswa
        $siswa->nama = $request->input('nama');
        $siswa->kelas_id = $request->input('kelas_id');
        $siswa->nomor_induk = $request->input('nomor_induk');
        $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $siswa->alamat = $request->input('alamat');
        $siswa->jenis_kelamin = $request->input('jenis_kelamin');
        $siswa->agama = $request->input('agama');
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Siswa telah diperbarui.');
    }

    public function destroy($id)
    {
        // Mendapatkan siswa yang akan dihapus
        $siswa = Siswa::find($id);

        // Menghapus pengguna (user)
        $user = User::find($siswa->user_id);
        $user->delete();

        // Menghapus siswa
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa telah dihapus.');
    }
}
