<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $DNI
 * @property $telefono
 * @property $impuesto
 * @property $id_net
 * @property $id_convergente
 * @property $id_tv
 * @property $id_descuento
 * @property $id_adicional_1
 * @property $id_adicional_2
 * @property $id_adicional_3
 * @property $id_adicional_4
 * @property $id_adicional_5
 * @property $cantidad_adicional_1
 * @property $cantidad_adicional_2
 * @property $cantidad_adicional_3
 * @property $cantidad_adicional_4
 * @property $cantidad_adicional_5
 * @property $id_movil_1
 * @property $id_movil_2
 * @property $id_movil_3
 * @property $id_movil_4
 * @property $id_movil_5
 * @property $cantidad_movil_1
 * @property $cantidad_movil_2
 * @property $cantidad_movil_3
 * @property $cantidad_movil_4
 * @property $cantidad_movil_5
 * @property $descuento_movil_1
 * @property $descuento_movil_2
 * @property $descuento_movil_3
 * @property $descuento_movil_4
 * @property $descuento_movil_5
 * @property $pvp
 * @property $codificacion
 * @property $observaciones
 * @property $id_codificacion
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['DNI', 'telefono', 'impuesto', 'id_net', 'id_convergente', 'id_tv', 'id_descuento', 'id_adicional_1', 'id_adicional_2', 'id_adicional_3', 'id_adicional_4', 'id_adicional_5', 'cantidad_adicional_1', 'cantidad_adicional_2', 'cantidad_adicional_3', 'cantidad_adicional_4', 'cantidad_adicional_5', 'id_movil_1', 'id_movil_2', 'id_movil_3', 'id_movil_4', 'id_movil_5', 'cantidad_movil_1', 'cantidad_movil_2', 'cantidad_movil_3', 'cantidad_movil_4', 'cantidad_movil_5', 'descuento_movil_1', 'descuento_movil_2', 'descuento_movil_3', 'descuento_movil_4', 'descuento_movil_5', 'pvp', 'codificacion', 'observaciones', 'id_codificacion', 'id_user','created_at'];



}
