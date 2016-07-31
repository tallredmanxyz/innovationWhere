<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPGOD101 extends Model
{
    protected $table = 'IPGOD101';
    protected $primaryKey = "AUSTRALIAN_APPL_NO";
    public $timestamps = false;
    public $incrementing = false;

    public function IPGOD102s()
    {
        return $this->hasMany('App\IPGOD102', 'AUSTRALIAN_APPL_NO');
    }
}
