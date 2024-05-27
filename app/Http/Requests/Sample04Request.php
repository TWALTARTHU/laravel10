<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sample04Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->path() == 'sample04') {
            return true;
        } else {
            return false;
        }
        }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'  => ['required'],
        'email' => [
            'required', 'email'
        ]

        ];
    }

    public function messages()
{

    return [
        'name.required' => '名前が入力されていません',
        'email.required'   => 'メールアドレスが入力されていません',
        'email.email'   => 'メールアドレスの形式が間違っています',
    ];
}

}
