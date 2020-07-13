<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
    	'uuid','fk_category','fk_status','codigo_producto',
    	'name','description','stock','price'
    ];

}
