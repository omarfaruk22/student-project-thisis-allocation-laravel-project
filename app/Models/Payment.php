<?php

namespace App\Models;

use App\Models\Backend\group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;
    public function group(){

        return $this->belongsTo(group::class,'st_group_id','id');
    }
}
