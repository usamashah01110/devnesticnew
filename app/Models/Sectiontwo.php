<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectiontwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_one',
        'short_about_us',
        'paragraph',
        'experiance',
        'ceo_founder_name',
        'ceo_founder_img',
        'large_img',
        'small_img',
        'contact'
    ];
}
