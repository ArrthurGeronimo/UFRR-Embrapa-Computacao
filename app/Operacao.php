<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operacao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'operacaos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['servico_id', 'piquete_id', 'insumo_id', 'data', 'unidade', 'quantidade', 'valor_unitario'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
