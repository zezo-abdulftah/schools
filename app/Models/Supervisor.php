<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable=['Teacher_id','Class_id'];

    protected $table = 'supervisors';
    public $timestamps = true;
    public function class(){
        return $this->belongsTo(Classroom::class,'Class_id');
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class,'Teacher_id');
    }


}
