<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'image',
        'description'
    ];
}
