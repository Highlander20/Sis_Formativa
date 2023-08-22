<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre_doc
 * @property $apellido
 * @property $grado
 * @property $profesion
 * @property $email
 * @property $dni
 * @property $telefono
 * @property $direccion
 * @property $curso_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Proyecto[] $proyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'nombre_doc' => 'required',
		'apellido' => 'required',
		'grado' => 'required',
		'profesion' => 'required',
		'email' => 'required',
		'dni' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'curso_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_doc','apellido','grado','profesion','email','dni','telefono','direccion','curso_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'docente_id', 'id');
    }
    

}
