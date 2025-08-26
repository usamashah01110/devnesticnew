<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'dev_id', // Foreign key from developer table
        'title',
        'description',
        'tech'
    ];

    public function sectionEight()
    {
        return $this->belongsTo(SectionEight::class);
    }
}
