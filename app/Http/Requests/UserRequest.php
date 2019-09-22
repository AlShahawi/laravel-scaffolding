<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed|max:255',
            'avatar' => 'image|nullable',
        ];

        $ignoredId = $this->route('user') ? $this->route('user')->id : null;

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules = array_merge($rules, [
                'email' => 'sometimes|required|email|max:255|unique:users,email,' . $ignoredId,
                'password' => 'sometimes|nullable|string|min:6|confirmed|max:255',
            ]);
        }

        return $rules;
    }

    /**
     * Get all the data
     *
     * @return array
     */
    public function transformed()
    {
        if ($this->password) {
            return array_merge($this->all(), [
                'password' => bcrypt($this->password),
            ]);
        }

        return $this->except('password', 'password_confirmation');
    }
}
