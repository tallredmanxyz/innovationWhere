<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPGOD202 extends Model
{
    protected $table = 'IPGOD202';
    protected $primaryKey = "ipa_applt_id";
    public $timestamps = false;
    public $incrementing = false;

    public function IPGOD201()
    {
        return $this->belongsTo('App\IPGOD201', 'tm_number');
    }
    
    public function firstLon(){
        
    }
}