<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $filable = [
        'easypaisa_no',
        'easypaisa_title',
        'points_value',
        'registeramont',
        'text',
    ];
}
