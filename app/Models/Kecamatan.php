<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'mst_kecamatan';
    // protected $primaryKey
    protected $guarded = [];

    public function mst_desa() {
        return $this->hasMany(Desa::class, 'kecamatan_id', 'id_kecamatan');
    }
}
