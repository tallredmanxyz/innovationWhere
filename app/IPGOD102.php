<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPGOD102 extends Model
{
    protected $table = 'IPGOD102';
    protected $primaryKey = "IPA_APPLT_ID";
    public $timestamps = false;
    public $incrementing = false;

    public function IPGOD102()
    {
        return $this->belongsTo('App\IPGOD101', 'AUSTRALIAN_APPL_NO');
    }
}
