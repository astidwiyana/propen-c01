<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kedisiplinan extends Model
{
    //
    public $table = 'kedisiplinan';
    public $timestamps = false;
    public $primaryKey = 'id';

    public function employee(){
    	return $this->belongsTo('App\Employee', 'nik_employee');
    }
}
