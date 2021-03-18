<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name'];

    // Relationships
    public function user(){
        return $this->hasMany(User::class, 'role_id');
    }
}
