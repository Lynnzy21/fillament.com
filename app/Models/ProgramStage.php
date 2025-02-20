<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStage extends Model
{
    /** @use HasFactory<\Database\Factories\ProgramStageFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
    ];

    public function list_santri(){
        return $this->hasMany(User::class,'program_stage_id');
    }
}
