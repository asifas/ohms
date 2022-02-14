<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prescription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function doctor():HasOne
    {
        return $this->hasOne(Doctor::class,'id','doctor_id');
    }

    public function inpatient():HasOne
    {
        return $this->hasOne(InPatient::class,'id','in_patient_id');
    }

    public function diagnosis(): HasMany
    {
        return $this->hasMany(PrescribedMedicine::class,'prescription_id','id');
    }
}
