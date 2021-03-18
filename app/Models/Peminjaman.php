<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_buku', 'id_admin', 'id_user', 'tanggal_pinjam', 'tanggal_kembali'];

    // Relationships
    public function buku(){
        return $this->belongsTo(Buku::class, 'id_buku');
    }
    public function admin(){
        return $this->belongsTo(User::class, 'id_admin');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
