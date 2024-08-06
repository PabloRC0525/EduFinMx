<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormRecuerdos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool 
    {
        return true; //Cambiamos a true para decirle que vamos a trabajar con la autorización 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ //Aquí van las reglas de validación
            //
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:4',
        ];
    }
}
