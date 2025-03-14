<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    /** @use HasFactory<\Database\Factories\PermissionFactory> */
    use HasFactory;

    protected $fillable = ['reason', 
    'status', 
    'start_date', 
    'end_date',
    'created_by',
    'updated_by', 
    'permission_type_id', 
    'employee_id', 
    'role_id',
    'santri_id'];

    
    public function santri_izin(){
        return $this->belongsTo(User::class,'santri_id');
    }

}
