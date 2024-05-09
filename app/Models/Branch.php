<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branchs'; // Modeli 'blogs' tablosuyla ilişkilendir

    protected $fillable = ['title', 'description', 'phone', 'image'];

}
