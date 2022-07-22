<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $filable = ['nama','username','password'];

    protected $hidden = ['password'];
    protected $guarded = [];

    public function tb_level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id_level');
    }

    public function tb_produktivitas()
    {
        return $this->hasMany(Produktivitas::class, 'created_by', 'id_user');
    }

    // public function scopeIsNotAdmin($query)
    // {
    //     return $query->where('level_id', '!=', 1);
    // }

}
