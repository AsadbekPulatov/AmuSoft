<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveServiceRequest extends FormRequest
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
            'title_uz' => 'required',
            'description_uz' => 'required',
            'title_ru' => 'required',
            'description_ru' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
            'img' => 'image',
        ];
    }
}
