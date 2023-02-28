<?php

namespace App\Http\Requests;

use App\Helpers\HttpHelper;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AvailableSeatRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'bus_number' => 'required|exists:trips,bus_number',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(HttpHelper::apiResponse(
            [],
            'The given data is invalid',
            $validator->errors()->all(),
            422
        ));
    }
}
