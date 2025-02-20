<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    /** @use HasFactory<\Database\Factories\AssessmentFactory> */
    use HasFactory;

    protected $fillable = [
        'score',
        'evaluation',
        'date'
    ];

    public function santri(){
        return $this->belongsTo(User::class,'santri_id');
    }
    public function lesson(){
        return $this->belongsTo(Lessons::class,'lessons_id');
    }
}
