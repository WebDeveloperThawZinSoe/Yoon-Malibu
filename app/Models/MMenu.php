<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'image',
        'description'
    ];
}
