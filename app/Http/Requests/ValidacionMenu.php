<?php

namespace App\Http\Requests;

use App\Rules\ValidarUrl;
use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Nullable;

class ValidacionMenu extends FormRequest
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

            'nombre' => 'required|max:50|unique:menu,nombre' . $this->route('id'),
            'url' => ['required', 'max:100', new ValidarUrl],
            'icono' => 'Nullable|max:100'
        ];
    }
}
