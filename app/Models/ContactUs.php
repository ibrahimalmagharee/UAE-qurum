<?php

namespace App\Models;

use App\Traits\MetronicPaginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use MetronicPaginate;
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name','last_name', 'phone', 'email', 'message', 'created_at','updated_at'];
}
