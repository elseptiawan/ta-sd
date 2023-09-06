<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "gurus";

    protected $fillable = [
        'nama', 'nip', 'jabatan', 'alamat', 'jenis_kelamin', 'agama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
