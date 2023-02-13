<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'group_id',
        'program',
        'semister',
        'phase',
       'supervisor','project','description','date'
    ];

    public function allocations(){
        return $this->hasMany(Allocation_detail::class,'allocation_id','id');
    
    
    }

    public function group_info(){
        return $this->belongsTo('App\Models\Backend\group','group_id','id');
    
    
    }
    public function faculty_info(){
        return $this->belongsTo('App\Models\Faculty','supervisor','id');
    
    
    }
    public function project_info(){
        return $this->belongsTo('App\Models\Backend\Project','project','id');
    
    
    }
}





