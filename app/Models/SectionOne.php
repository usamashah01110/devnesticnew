<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionOne extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_one',
        'paragraph',
        'btn_one_text',
        'years',
        'clients',
        'success_rate',
        'image_path',
    ];

}
