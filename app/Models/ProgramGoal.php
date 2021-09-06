<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramGoal extends Model
{
    use MetronicPaginate;
    protected $table = 'program_goals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title_ar',
        'title_en',
        'description1_ar',
        'description1_en',
        'description2_ar',
        'description2_en',
        'description3_ar',
        'description3_en',
        'description4_ar',
        'description4_en',
        'description5_ar',
        'description5_en',
        'created_at',
        'updated_at'
    ];
}
