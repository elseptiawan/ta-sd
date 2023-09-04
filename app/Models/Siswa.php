<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";

    protected $fillable = [
        'user_id', 'nama', 'kelas_id', 'nomor_induk', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'agama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
