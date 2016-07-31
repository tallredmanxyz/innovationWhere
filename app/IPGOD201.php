<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPGOD201 extends Model
{
    protected $table = 'IPGOD201';
    protected $primaryKey = "tm_number";
    public $timestamps = false;
    public $incrementing = false;

    public function IPGOD204s()
    {
        return $this->hasMany('App\IPGOD204', 'tm_number');
    }

    public function IPGOD202s()
    {
        return $this->hasMany('App\IPGOD202', 'tm_number');
    }


}
