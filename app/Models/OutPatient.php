<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutPatient extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['out_patient_identifier'];

    public function getOutPatientIdentifierAttribute()
    {
        return "OPID" . "-" . sprintf('%06d', $this->attributes['id']);
    }
}
