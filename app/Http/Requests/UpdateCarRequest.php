<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'brand' => 'string|min:2',
            'model' => 'string|min:2',
            'year' => '',
            'max_speed' => 'integer|min:20|max:300',
            'is_automatic' => '',
            'engine' => '',
            'number_of_doors' => 'integer|min:2|max:5',
        ];
    }
}
