<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'is_public' => 'required',
            'rol' => 'required|in:Administrador,Administrativo,Profesor',
            'profession' => 'required|string|max:20',
            'name' => 'required|string|max:100',
            'surname' => 'required|string|max:100',
            'birthdate' => 'required|date',
            'email' => 'required|email',
            'curp' => 'required|string|min:18',
            'rfc' => 'required|string|min:13',
            'origin' => 'required|string',
            'civil_status' => 'required|in:Soltero,Casado,Viudo,Union Libre,Divorciado,Separación En Proceso,Concubinato',
            'sexo' => 'required|in:Hombre,Mujer',
            'personal_address' => 'required|string',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:6',
            'status' => 'required|in:Activo,Inactivo',
            'departament_id' => 'required|int',
            'stall' => 'required|string',
            'employee_number' => 'required',
            'employee_phone' => 'required',
            'salary_min' => 'required',
            'salary_max' => 'required',
            'date_of_admission' => 'required|date',
            'employee_code' => 'required',
        ];
    }
}
