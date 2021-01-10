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

    public function subjects(){
    	return $this->belongsTo(Subject::class,'subjects_id');
    }

    public function student(){
    	return $this->belongsTo(User::class,'student_id');
    }
}
