<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            //
			'email' => 'required|email',
			'partner' => 'required',
			'status' => 'required'
        ];
    }
	/**************************************/
	/*Метод обработки сообщений об ошибках*/
	/**************************************/
	public function messages()
	{
		return [
            //
			'email.required' => 'Поле email обязательно для заполнения',
			'email.email' => 'Email имеет неправильный формат',
			'partner.required' => 'Поле партнер обязательно для заполнения',
			'status.required' => 'Поле статус обязательно для заполнения'
        ];
	}
}
