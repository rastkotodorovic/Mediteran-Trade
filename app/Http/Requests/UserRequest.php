<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required', // TODO email unique
            'password' => 'required',
            'avatar' => 'file',
            'admin' => 'required|boolean',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'admin' => $this->has('admin'),
        ]);
    }
}
