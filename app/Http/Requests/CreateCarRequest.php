<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'brand' => 'required|string|min:2',
            'model' => 'required|string|min:2',
            'year' => 'required',
            'max_speed' => 'integer|min:20|max:300',
            'is_automatic' => 'required',
            'engine' => 'required',
            'number_of_doors' => 'required|integer|min:2|max:5',
        ];
    }
}
