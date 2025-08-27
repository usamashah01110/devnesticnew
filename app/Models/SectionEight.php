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

    public function developerProject()
    {
        return $this->hasMany(DeveloperProject::class);
    }

    public function developerEducation()
    {
        return $this->hasMany(DeveloperEducation::class);
    }
    public function developerContact()
    {
        return $this->hasMany(DeveloperContact::class);
    }
    public function developerExperiance()
    {
        return $this->hasMany(DeveloperExperiance::class);
    }
}
