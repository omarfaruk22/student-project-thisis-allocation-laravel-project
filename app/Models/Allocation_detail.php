<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'allocation_id',
        'student_id',
        'name',
        'email',
        'phone','cgpa'
    ];
}
