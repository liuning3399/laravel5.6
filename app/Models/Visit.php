<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    // protected $fillable = ['post_id', 'ip', 'user_id','url','port','info','browser','frompage','os','country','area','region','city','county','isp','country_id','area_id','region_id','city_id','county_id','isp_id','code'];
    protected $fillable = ['post_id','user_id'];
}
