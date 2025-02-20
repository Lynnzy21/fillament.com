<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    /** @use HasFactory<\Database\Factories\AttachmentFactory> */
    use HasFactory;

    protected $fillable =[
        'attachment',
        'attachment_path'
    ];

    public function list_attachment_santri(){
        return $this->hasMany(AttachmentSantri::class,'attachment_id') ;
    }
}
