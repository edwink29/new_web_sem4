<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;

class Prodi extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'kode_prodi',
        'jenjang',
        'nama_prodi',
    ];

}
