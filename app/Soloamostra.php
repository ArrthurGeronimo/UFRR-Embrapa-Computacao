<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soloamostra extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'soloamostras';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'amostra_id', 'data', 'profundidade', 'ph', 'mo', 'p', 'k', 'ca', 'mg', 'h+ai', 'ai', 's', 'cu', 'fe', 'zn', 'mn', 'b'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
