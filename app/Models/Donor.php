<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Donor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function Inpatient():belongsTo
    {
        return $this->belongsTo(Inpatient::class,'in_patient_id','id');
    }

}
