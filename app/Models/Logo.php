<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logo extends Model
{
    use MetronicPaginate;
    protected $table = 'logos';
    protected $primaryKey = 'id';
    protected $fillable = ['logo','created_at','updated_at'];

    public function getLogoAttribute()
    {
        return empty($this->attributes['logo']) ? '#' : app_url('media/logo'.'/'.$this->attributes['logo']);
    }
}
