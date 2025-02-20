<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    /** @use HasFactory<\Database\Factories\ActivitieFactory> */
    use HasFactory;

    protected $fillable = [
        'activity_name',
        'activity_date',
        'is_event',
        'description',
    ];

    public function list_attendences(){
        return $this->hasMany(Attendance::class,'activity_id') ;
    }
}
