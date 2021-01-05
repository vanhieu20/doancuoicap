<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = "subjects";
    protected $fillable = [
        'id',
        'counrses_id',
        'name',
        'image',
        'content',
        'money',
        'date_start',
        'date_end',
    ];

    public function course(){
    	return $this->belongsTo(Course::class,'counrses_id');
    }
}
