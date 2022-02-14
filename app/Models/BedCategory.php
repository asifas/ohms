<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function floors()
    {
        return $this->belongsTo(BedFloor::class,'bed_floor_id','id')->orderBy('id')->select(['id','name']);
    }
}
