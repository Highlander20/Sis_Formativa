<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facultade
 *
 * @property $id
 * @property $nombre_fac
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Escuela[] $escuelas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facultade extends Model
{
    
    static $rules = [
		'nombre_fac' => 'required',
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_fac','codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function escuelas()
    {
        return $this->hasMany('App\Models\Escuela', 'facultad_id', 'id');
    }
    

}
