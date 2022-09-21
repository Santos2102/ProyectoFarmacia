<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicontroladoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nombre'=>'required|min:5|Max:500',
            'descripcion'=>'required|min:5|Max:500',
            'laboratorio'=>'required|min:5|Max:500',
            'presentacion'=>'required|min:5|Max:500',
            'precio_unidad'=>'required',
            'Existencia'=>'required',
            'receta_medica'=>'required',
            'imagen'=>'required|min:5|Max:500',
        ];
    }
}
