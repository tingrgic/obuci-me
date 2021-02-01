<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'season',
        'shirt_id',
        'shoe_id',
        'jacket_id',
        'pant_id',
    ];
}
