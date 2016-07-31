<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPGOD204 extends Model
{
    protected $table = 'IPGOD204_CONCAT';
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;

    public function IPGOD201()
    {
        return $this->belongsTo('App\IPGOD201', 'tm_number');
    }
}