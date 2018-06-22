<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cultura extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'culturas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['especie', 'material'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
