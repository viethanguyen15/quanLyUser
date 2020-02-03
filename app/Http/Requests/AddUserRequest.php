<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'phone' => 'required|regex:/^[0-9]{5,11}$/|unique:users,phone',
            'address' => 'required|regex:/^[A-Za-z ,]{5,20}$/',
            'id_number' => 'required|min:2|numeric', 
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Họ tên không để trống',
            'fullname.regex' => 'Họ tên là chuỗi và ít nhất 3 ký tự',
            'phone.regex' => 'Số điện thoại phải là số và ít nhất 5 số',
        ];
    }
}
