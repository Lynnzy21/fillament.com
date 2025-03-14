<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    /** @use HasFactory<\Database\Factories\LessonsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'kelas_santri_id',
        'description'
    ];

    public function kelas(){
        return $this->belongsTo(KelasSantri::class,'kelas_santri_id');
    }

    public function list_assesment(){
        return $this->hasMany(Assessment::class,'lessons_id');
    }
}
