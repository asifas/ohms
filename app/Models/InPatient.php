<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InPatient extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['serial_no'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

    public function bed()
    {
        return $this->belongsTo(Bed::class,'bed_id','id')->select('id','name','bed_category_id');
    }

    public function getSerialNoAttribute()
    {
        return "INPAT" . "-" . sprintf("%05d", $this->attributes['id']);
    }
}
