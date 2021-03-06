<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'area_id',
    	'name',
    	'phone_no_1',
    	'phone_no_2',
    	'address',
    	'connection_type',
    	'package_id',
        'client_status',
    	'address_proof',
    	'address_proof_no',
    	'device_box_no'
    ];
    /**
     * Get the client channel package.
     */
    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id', 'id');
    }

    /**
     * Get the client area.
     */
    public function area_name()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }
}
