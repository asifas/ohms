<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function out_patients()
    {
        return $this->belongsTo(OutPatient::class,'out_patient_id')->select('id','name','phone');
    }

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id')->select('id','name','department_id');
    }
}
