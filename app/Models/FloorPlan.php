<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorPlan extends Model
{
    use HasFactory;

    protected $table = 'floor_plans';

    protected $fillable = ['project_id','floor_plan', 'image'];

    protected $guarded = [];

}
