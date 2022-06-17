<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name_uz' => 'required',
            'text_uz' => 'required',
            'name_ru' => 'required',
            'text_ru' => 'required',
            'name_en' => 'required',
            'text_en' => 'required',
            'teacher_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'time' => 'required',
            'img' => 'required',
        ];
    }
}
