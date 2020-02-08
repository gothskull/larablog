<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'nombre'           => 'required|unique:projects',
            'fecha_inicio'     => 'required',
            'categoria_id'     => 'required|not_in:0',
            'servidor_id'      => 'required|not_in:0',
            'plan_id'          => 'required|not_in:0',
            'representante_id' => 'required|not_in:0',
            'emp_dominio_id'   => 'required|not_in:0',
        ];
    }
}
