<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectionFive extends Model
{
    use HasFactory;

    protected $table = 'section_fives';

    protected $fillable = [
        'name',
        'description',
        'role',
        'linkedin',
        'twitter',
        'instagram',
        'image'
    ];
}
