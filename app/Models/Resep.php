<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $fillable = ['resep_code','resep','resep_description'];
  
    public function obats()
    {
        return $this->belongsTo(Resep::class,'resep_code','code');
    }

}
