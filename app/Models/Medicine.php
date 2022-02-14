<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicine extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company():belongsTo
    {
        return $this->belongsTo(Company::class)->select('id','name','is_active');
    }

    public function category()
    {
        return $this->hasOne(MedicineCategory::class,'id','medicine_category_id')->select('id','name');
    }
}
