<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tb_kandidat extends Model
{
    use HasFactory;

    protected $table = 'tb_kandidats';
    protected $fillable = [
        'id',
        'nim',
        'nm_kandidat',
        'nomor',
        'visi',
        'misi',
        'jurusan',
        'angkatan',
        'foto',
        'suara'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
