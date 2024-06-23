<?php

namespace App\Models; // Ubah namespace sesuai dengan konvensi Laravel 10

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = "hadiah"; // Menggunakan tanda kutip ganda untuk nama tabel

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class); // Menggunakan sintaks ::class
    }
}
