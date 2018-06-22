<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manejoanimal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'manejoanimals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animal_id', 'nome', 'data'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
