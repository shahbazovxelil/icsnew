<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SocialStoreRequest extends FormRequest
{

   final public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    final public function rules(): array
    {
        return [
            'icon' => 'required',
            'name' => 'required|string',
        ];
    }
}
