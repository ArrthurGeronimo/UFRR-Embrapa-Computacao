<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estacao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estacaos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['talhao_id', 'fazenda_id', 'codigo', 'nome', 'responsavel', 'latitude', 'longitude', 'altitude', 'data_primeira_coleta'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
