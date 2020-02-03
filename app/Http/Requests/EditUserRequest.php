<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'fullname' => 'required|regex:/^[A-Za-z ]{3,20}$/',
            'phone' => 'required|regex:/^[0-9]{10,11}$/|unique:users,phone',
            'address' => 'required|regex:/^[A-Za-z ,]{5,20}$/',
            'id_number' => 'required|numeric|min:2',
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'Số điện thoại phải là số và tối thiểu 10 chữ số',
            'phone.unique' => 'Số điện thoại đã tồn tại',
        ];
    }
}
