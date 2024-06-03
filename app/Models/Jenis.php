<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $primaryKey = 'idjenis';
    
    protected $fillable = [
        'namajenis',
        'kodejenis',
        'keterangan'
    ];

    public function petugas()
    {
    return $this->belongsTo(Petugas::class, 'namapetugas', 'idpetugas');
    }
}
