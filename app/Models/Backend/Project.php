<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'faculty_id',
        'pname',
        'description',
        'image'
        
    ];
    public function fuculty_details(){
        return $this->belongsTo('App\Models\Faculty','faculty_id','id');
    }
    
}
