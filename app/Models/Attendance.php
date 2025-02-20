<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory;

    protected $fillable = [
        'status',
        'date'
    ];

    public function activity(){
        return $this->belongsTo(Activitie::class,'activity_id');
    }

    public function santri(){
        return $this->belongsTo(User::class,'santri_id') ;
    }
}
