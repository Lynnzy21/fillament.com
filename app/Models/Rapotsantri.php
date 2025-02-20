<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapotsantri extends Model
{
    /** @use HasFactory<\Database\Factories\RapotsantriFactory> */
    use HasFactory;

    protected $fillable = ['academic_year','santri_id', 'overal_score','strength', 'weaknesses',];
}
