<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsPage extends Model
{
    use MetronicPaginate;
    protected $table = 'contact_us_pages';
    protected $primaryKey = 'id';
    protected $fillable = ['website','phone','email','location_ar', 'location_en', 'created_at','updated_at'];
}
