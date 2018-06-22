<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fazenda_id', 'numero_fazenda', 'pai', 'mae', 'nascimento', 'procedencia', 'entrada_fazenda', 'saida_fazenda'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function fazenda()
    {
        return $this->belongsTo(Fazenda::class);
    }

}
