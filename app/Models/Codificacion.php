<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Codificaciones
 *
 * @property $id
 * @property $codificaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Registro[] $registros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Codificacion extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'codificaciones';

    protected $fillable = ['codificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany(\App\Models\Registro::class, 'id', 'id_codificacion');
    }
    

}
