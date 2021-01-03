<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisInfo extends Model
{
    use HasFactory;

    protected $table = "regis_infos";
    protected $fillable = [
        'id',
        'subjects_id',
        'student_id',
        'money',
    ];
}
