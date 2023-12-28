<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "section_name"  =>  'required|max:255|unique:sections,section_name,'.$this->id,
            "description"   =>  'required',
        ];
    }
    public function messages()
    {
        return [
            "section_name.required" =>  trans('settings_translate.section_name_empty')  ,
            "section_name.unique"   =>  trans('settings_translate.section_name_unique')   ,
            "description.required"  =>  trans('settings_translate.section_description_empty')
        ];
    }
}
