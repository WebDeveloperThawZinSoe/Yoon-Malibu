<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'image',
        'description'
    ];
    // $table->string("name");
    // $table->integer("category_id");
    // $table->integer("price");
    // $table->string("image");
    // $table->text("description");
}
