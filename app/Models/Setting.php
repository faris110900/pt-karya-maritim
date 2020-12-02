<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'slide1',
        'slide2',
        'slide3',
        'title',
        'caption',
        'section1',
        'section2',
        'titlenav'
    ];
}
