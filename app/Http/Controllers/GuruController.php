<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Support\Carbon;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('Pages.Guru.indexGuru', compact('guru'));
    }

    public function create()
    {
        return view('Pages.Guru.create');
    }

    public function store(Request $request)
    {
        // Membuat pengguna (user)
        $user = new User;
        $user->name = $request->input('nama');
        $user->email = $request->input('email'); // Atur email sesuai kebutuhan
        $user->password = bcrypt($request->input('nuptk')); // Anda dapat mengenkripsi password sesuai kebutuhan
        $user->save();

        // Membuat guru dan menghubungkannya dengan pengguna
        $guru = new Guru;
        $guru->user_id = $user->id;
        $guru->nama = $request->input('nama');
        $guru->nuptk = $request->input('nuptk');
        $guru->jabatan = $request->input('jabatan');
        $guru->alamat = $request->input('alamat');
        $guru->jenis_kelamin = $request->input('jenis_kelamin');
        $guru->agama = $request->input('agama');
        $guru->no_hp = $request->input('no_hp');
        $guru->tanggal_lahir = Carbon::parse($request->input('tanggal_lahir'));
        $guru->save();

        return redirect()->route('guru.index')->with('success', 'Guru telah ditambahkan.');
    }

    public function edit($id)
    {
        $guru = Guru::where('id', $id)->with('user')->first();
        return view('Pages.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        // Mendapatkan guru yang akan diperbarui
        $guru = Guru::find($id);

        // Memperbarui data pengguna (user)
        $user = User::find($guru->user_id);
        $user->name = $request->input('nama');
        // Anda dapat memperbarui email atau password sesuai kebutuhan
        $user->save();

        // Memperbarui data guru
        $guru->nama = $request->input('nama');
        $guru->nuptk = $request->input('nuptk');
        $guru->jabatan = $request->input('jabatan');
        $guru->alamat = $request->input('alamat');
        $guru->jenis_kelamin = $request->input('jenis_kelamin');
        $guru->agama = $request->input('agama');
        $guru->no_hp = $request->input('no_hp');
        $guru->tanggal_lahir = Carbon::parse($request->input('tanggal_lahir'));
        $guru->save();

        return redirect()->route('guru.index')->with('success', 'Guru telah diperbarui.');
    }

    public function destroy($id)
    {
        // Mendapatkan guru yang akan dihapus
        $guru = Guru::find($id);

        // Menghapus pengguna (user)
        $user = User::find($guru->user_id);
        $user->delete();

        // Menghapus guru
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru telah dihapus.');
    }
}
