<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model 
{
	//Tabla seleccionada
	protected $table = 'usuarios';

	//Campos de la tabla
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'telefono',
        'correo',
        'direccion',
        'eliminado'

    ];

    //Llave primaria
    protected $primaryKey = 'id';

    public $timestamps = false;

    //Elementos ocultos
    protected $hidden = [
    ];

}
