<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperExperiance extends Model
{
    use HasFactory;

    protected $fillable = [
        'dev_id',
        'experiance_degree',
        'experiance_institute',
        'experiance_starting_date',
        'experiance_ending_date',
        'experiance_description'
    ];

    public function sectionEight() {
        return $this->belongsTo(SectionEight::class);
    }
}
