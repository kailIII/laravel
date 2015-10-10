<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class cursos extends Model
{
    
	public $table = "cursos";
    

	public $fillable = [
	    "nombre",
		"descripcion",
		"visible",
		"cantidad_asistentes",
		"tipo_curso",
		"fecha_inicio",
		"direccion"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string",
		"descripcion" => "string",
		"visible" => "boolean",
		"cantidad_asistentes" => "integer",
		"tipo_curso" => "integer",
		"direccion" => "string"
    ];

	public static $rules = [
	    "nombre" => "required"
	];

}
