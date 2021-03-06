<?php

namespace App\Http\Requests\Admin\Control;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategorie extends FormRequest
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
        $rules = [
            'name' => 'required'
        ];

//        if ($this->getMethod() == 'POST') {
//            $rules += ['password' => 'required|min:6'];
//        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => 'nome'
        ];
    }
}
