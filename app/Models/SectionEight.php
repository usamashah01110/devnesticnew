<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionEight extends Model
{
    use HasFactory;

    protected $table = 'section_eights';

    protected $fillable = [
        'developer_id',
        'name',
        'role',
        'description',
        'tech1',
        'tech2',
        'tech3',
        'tech4',
        'image'
    ];

    
}
