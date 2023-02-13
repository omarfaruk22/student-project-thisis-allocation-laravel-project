<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function group_show(){
        return $this->belongsTo('App\Models\Backend\group','group_id','id');
    
    
    }
    public function faculty_show(){
        return $this->belongsTo('App\Models\Faculty','faculty_id','id');
}


}
