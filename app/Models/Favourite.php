<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'name',
        'outfit_id',
    ];
}
