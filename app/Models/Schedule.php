<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'teacher_name',
        'subject',
        'class_name',
        'start_time',
        'end_time',
    ];
}
