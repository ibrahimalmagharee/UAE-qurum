<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use MetronicPaginate;
    protected $table = 'social_links';
    protected $primaryKey = 'id';
    protected $fillable = ['name_ar','name_en','link','created_at','updated_at'];
}
