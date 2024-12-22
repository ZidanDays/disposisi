<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    //
    // use HasFactory;

    protected $fillable = [
        'nomor_naskah',
        'tanggal_naskah',
        'sifat',
        'dari',
        'hal',
        'lampiran',
    ];

    public function disposisi()
    {
        return $this->hasMany(Disposisi::class);
    }
}