<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    protected $fillable = ['code','obat','jenis_obat','tipe_obat','description'];

    public function reseps(){
        return $this->hasMany(Resep::class,'resep_code', 'code');
    }
    
}
