<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'developer_email',
        'developer_phone_no',
        'developer_location',
        'dev_id'
    ];
}
