<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageItem extends Model
{
    use HasFactory;

    protected $table = 'image_items';

    protected $fillable = [
        'owner',
        'name',
        'tag',
        'image',
        'description'
    ];
}
