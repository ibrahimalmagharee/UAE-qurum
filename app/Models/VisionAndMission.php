<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionAndMission extends Model
{
    use MetronicPaginate;
    protected $table = 'vision_and_missions';
    protected $primaryKey = 'id';
    protected $fillable = ['type','title_ar','title_en','description_ar','description_en', 'created_at','updated_at'];

}
