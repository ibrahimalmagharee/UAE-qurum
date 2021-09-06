<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    use MetronicPaginate;
    protected $table = 'introductions';
    protected $primaryKey = 'id';
    protected $fillable = ['title_ar','title_en','description_ar','description_en', 'image', 'video', 'created_at','updated_at'];

    public function getImageAttribute()
    {
        return empty($this->attributes['image']) ? '#' : app_url('media/introduction'.'/'.$this->attributes['image']);
    }

    public function getVideo($val)
    {
        return ($val !== null) ? asset('media/introduction/' . $val) : "";

    }

//    public function getVideoAttribute()
//    {
//        return empty($this->attributes['video']) ? '#' : app_url('media/introduction'.'/'.$this->attributes['video']);
//    }
}
