<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $table = "mata_pelajaran";
    protected $fillable = [
        'guru_id', 'nama_matapel', 'deskripsi',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
