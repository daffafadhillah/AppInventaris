<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $primaryKey = 'idpegawai';

    protected $fillable = [
        'namapegawai',
        'alamat',
        'nip'
    ];
}
