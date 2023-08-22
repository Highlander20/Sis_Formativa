<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nombre_cur
 * @property $codigo
 * @property $escuela_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente[] $docentes
 * @property Escuela $escuela
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'nombre_cur' => 'required',
		'codigo' => 'required',
		'escuela_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cur','codigo','escuela_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docentes()
    {
        return $this->hasMany('App\Models\Docente', 'curso_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escuela()
    {
        return $this->hasOne('App\Models\Escuela', 'id', 'escuela_id');
    }
    

}
