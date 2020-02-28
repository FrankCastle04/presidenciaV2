<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
	protected $fillable = [
		      'noempleado',
                  'nombre',
                  'apellidos',
                  'ine',
                  'curp',
                  'areaadscr',
                  'cargo',
                  'rfc',
                  'calle',
                  'colonia',
                  'cp',
                  'municipio',
                  'noext',
                  'noint',
                  'correo',
                  'nocasa',
                  'nocelular'];
        	//	protected $guarded = [];

	public function getRouteKeyName()
	{
		return 'apellidos';
	}
}
