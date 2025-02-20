<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantriFamily extends Model
{
    /** @use HasFactory<\Database\Factories\SantriFamilyFactory> */
    use HasFactory;

    protected $fillable = [
        'santri_id', 
        'no_kk', 'father_name', 'father_job', 'father_birth', 'father_phone',
        'mother_name', 'mother_job', 'mother_birth', 'mother_phone'
    ];

    public function santri(){
        return $this->belongsTo(User::class,'santri_id') ;
    }
    
}
