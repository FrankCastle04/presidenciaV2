<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'noempleado' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'ine' => 'required',
            'curp' => 'required',
            'areaadscr' => 'required',
            'cargo' => 'required',
            'rfc' => 'required',
            'calle' => 'required',
            'colonia' => 'required',
            'cp' => 'required',
            'municipio' => 'required',
            // 'correo' => 'required',
            // 'nocelular' => 'required',
        ];
    }

    public function messages()
    {
        return[
                'noempleado.required' => 'Se necesita escribir el numero de empleado',
                 'nombre.required' => 'Falta por escribir el nombre',
                 'apellidos.required' => 'Faltan los apellidos',
                 'ine.required' => 'Falta la clave de INE',
                 'curp.required' => 'Falta la CURP',
                 'areaadscr.required' => 'Falta el area de adscripcion',
                 'cargo.required' => 'Falta el cargo',
                 'rfc.required' => 'Falta el RFC',
                 'calle.required' => 'Falta la calle',
                 'colonia.required' => 'Falta la colonia',
                 'cp.required' => 'Falta el Codigo Postal',
                 'municipio.required' => 'Falta el Municipio',
                 // 'correo.required' => 'Falta el correo',
                 // 'nocelular.required' => 'Falta el numero de celular',
            ];
        }
}
