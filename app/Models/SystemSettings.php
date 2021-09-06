<?php
/**
 * Created by PhpStorm.
 * User: Khaled Al-Haj Salem
 * Date: 2/22/2019
 * Time: 9:53 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SystemSettings extends Model
{
    protected $table = 'general_settings';
    protected $primaryKey = 'id';
    protected $fillable = [
        '_key',
        '_value',
        'created_at',
        'updated_at'
    ];
    public $timestamps = false;
}
