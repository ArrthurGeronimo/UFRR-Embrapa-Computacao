<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amostra extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'amostras';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_amostra', 'bloco', 'tratamento', 'area_parcela', 'animal_id', 'praga_id', 'plantiocultura_id', 'soloamostra_id', 'pastagemamostra_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
