<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bed_category()
    {
        return $this->belongsTo(BedCategory::class,'bed_category_id','id')->select('id','name','bed_floor_id');
    }
}
