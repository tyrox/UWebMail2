<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'user' => 'required|unique:users,user',
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5',
            
            //
        ];
    }
}
