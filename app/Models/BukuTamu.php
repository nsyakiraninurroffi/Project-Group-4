<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;

    protected $table = 'buku-tamu';

    protected $primaryKey = 'id_tamu';

    protected $fillable = [
        'nama_tamu',
        'email',
        'alamat',
        'no_hp',
        'kepentingan',
        'tanggal',
    ];

    // Kalau kamu tidak pakai timestamps (created_at, updated_at), bisa matikan:
    public $timestamps = false;
}