<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama' ,
        'tempat_lahir' ,
        'dob' ,
        'jk' ,
        'pendidikan' ,
        'agama' ,
        'pekerjaan' ,
        'ayah' ,
        'ibu' ,
    ];
}
