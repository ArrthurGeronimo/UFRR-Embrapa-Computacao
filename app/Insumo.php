<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insumo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'insumos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'unidade'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
