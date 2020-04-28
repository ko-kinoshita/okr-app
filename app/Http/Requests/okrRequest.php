<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class okrRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'Home/add')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'objective' => 'required',
            'key_result' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'objective.required' => '必ず入力してください',
            'key_result.required' => '必ず入力してください',
        ];
    }
}
