<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewans'; // Sesuai dengan nama tabel di database
    protected $primaryKey = 'idHewan'; // Primary key

    public $incrementing = false; // Jika `idHewan` bukan auto-increment
    protected $keyType = 'string'; // Sesuaikan dengan tipe data `idHewan` di database

    protected $fillable = [
        'idHewan',
        'namaHewan',
        'jenisHewan',
        'idPemilik',
    ];
}


