<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use MetronicPaginate;
    protected $table = 'mains';
    protected $primaryKey = 'id';
    protected $fillable = ['title_ar','title_en','description_ar','description_en', 'created_at','updated_at'];
}
