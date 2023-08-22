<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escuela
 *
 * @property $id
 * @property $nombre_esc
 * @property $codigo
 * @property $facultad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso[] $cursos
 * @property Facultade $facultade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Escuela extends Model
{
    
    static $rules = [
		'nombre_esc' => 'required',
		'codigo' => 'required',
		'facultad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_esc','codigo','facultad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Models\Curso', 'escuela_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facultade()
    {
        return $this->hasOne('App\Models\Facultade', 'id', 'facultad_id');
    }
    

}
