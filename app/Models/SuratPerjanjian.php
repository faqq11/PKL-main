<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPerjanjian extends Model
{
    protected $table = 'suratperjanjians';
    protected $fillable = ['nama','nomor', 'tanggal', 'keterangan', 'upload_dokumen','approval', 'alasan',];

    public function dpa()
    {
        return $this->belongsTo(DPA::class, 'dpa_id');
    }
}
