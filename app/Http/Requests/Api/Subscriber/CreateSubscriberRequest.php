<?php

namespace App\Http\Requests\Api\Subscriber;

use Illuminate\Foundation\Http\FormRequest;

class CreateSubscriberRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2', 'max:50','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'email' => ['required', 'email'],
            'country' => ['required', 'alpha', 'min:2', 'max:100']
        ];
    }
}
