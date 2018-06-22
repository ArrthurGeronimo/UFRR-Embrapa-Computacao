<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Praga extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pragas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['amostra_id', 'tipo', 'especie', 'densidade', 'area'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
