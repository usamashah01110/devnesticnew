<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionSeven extends Model
{
    use HasFactory;
    protected $fillable = [
        'building_number',
        'street',
        'city',
        'zip_code',
        'contact_one',
        'contact_two',
        'email'
    ];
}
