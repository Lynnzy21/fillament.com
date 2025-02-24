<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmen extends Model
{
    /** @use HasFactory<\Database\Factories\DepartemenFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'leader_id',
        'co_leader_id',
    ];

    public function members(){
        return $this->hasMany(User::class,'departmen_id');
    }

    public function leader(){
        return $this->belongsTo(User::class,'leader_id');
    }

    public function co_leader(){
        return $this->belongsTo(User::class,'co_leader_id');
    }
}

