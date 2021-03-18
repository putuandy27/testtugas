<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'jumlah_buku'];

    // Relationships
    public function peminjaman_buku(){
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}
