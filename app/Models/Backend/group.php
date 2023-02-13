<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $fillable = [
        'gname',
        
    ];

    public function group_details(){
        return $this->hasMany(St_group_detail::class,'group_id','id');
    
    
    }


}

