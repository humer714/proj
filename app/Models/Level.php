<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'limit',
        'percentage',
        'total_team_member',
        'first_member_commision',
        'second_member_commision',
        'third_member_commision',
    ];
}
