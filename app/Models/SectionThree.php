<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionThree extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'title',
        'description',
        'link'
    ];
}
