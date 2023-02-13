<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function group_shows(){
        return $this->belongsTo('App\Models\Backend\group','group_id','id');
    
    
    }
    public function faculty_shows(){
        return $this->belongsTo('App\Models\Faculty','faculty_id','id');
}
}
