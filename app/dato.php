<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dato extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'descripcion'];

    
}
