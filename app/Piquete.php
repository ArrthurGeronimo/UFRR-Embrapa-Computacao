<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Piquete extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'piquetes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['talhao_id', 'area', 'capim'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
