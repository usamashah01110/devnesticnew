<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'dev_id',
        'education_degree',
        'education_institute',
        'education_starting_date',
        'education_ending_date'
    ];

    public function sectionEight()
    {
        return $this->belongsTo(SectionEight::class);
    }
}
