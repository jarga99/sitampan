<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'tb_level';
    // protected $primaryKey
    protected $guarded = [];

    public function tb_user() {
        return $this->hasMany(User::class, 'level_id', 'id_level');
    }
}
