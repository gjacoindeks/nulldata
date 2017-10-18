<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilios extends Model
{
    
protected $table = 'domicilios';


     public function usuario(){

    		return $this->belongsTo('test\Usuario);

    }
}


