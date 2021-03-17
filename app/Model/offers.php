<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    protected $table="offers";
    protected $fillable=["name","price","details"];
    protected $hidden=["created_at","updated_at"];
    public $timestamps=false;

}
