<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    //
    protected $fillable = [
        'surat_id',
        'dari_user_id',
        'kepada_user_id',
        'catatan'
    ];

    public function surat_masuk()
    {
        return $this->belongsTo(SuratMasuk::class);
    }

    public function sender ()
    {
        return $this->belongsTo(User::class, 'dari_user_id');
    }

    public function receiver ()
    {
        return $this->belongsTo(User::class, 'kepada_user_id');
    }
}