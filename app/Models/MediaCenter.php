<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaCenter extends Model
{
    use MetronicPaginate;
    protected $table = 'media_centers';
    protected $primaryKey = 'id';
    protected $fillable = ['image1', 'image2', 'image3', 'image4', 'image5', 'video', 'image_video_cover', 'created_at','updated_at'];


    public function getImage1Attribute()
    {
        return empty($this->attributes['image1']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image1']);
    }

    public function getImage2Attribute()
    {
        return empty($this->attributes['image2']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image2']);
    }

    public function getImageAttribute()
    {
        return empty($this->attributes['image']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image']);
    }

    public function getImage3Attribute()
    {
        return empty($this->attributes['image3']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image3']);
    }

    public function getImage4Attribute()
    {
        return empty($this->attributes['image4']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image4']);
    }

    public function getImage5Attribute()
    {
        return empty($this->attributes['image5']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image5']);
    }

    public function getImageVideoCoverAttribute()
    {
        return empty($this->attributes['image_video_cover']) ? '#' : app_url('media/mediaCenter'.'/'.$this->attributes['image_video_cover']);
    }

    public function getVideo($val)
    {
        return ($val !== null) ? asset('media/mediaCenter/' . $val) : "";

    }
}
