<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class DTConsultingTransUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'item_one_text' => 'required|string',
            'item_two_text' => 'required|string',
            'item_three_text' => 'required|string',
            'service_title' => 'required|string',
            'service_description' => 'required|string',

            'middle_title' => 'required|string',
            'middle_description' => 'required|string',
            'middle_text_one' => 'required|string',
            'middle_text_two' => 'required|string',
            'middle_text_three' => 'required|string',


            'language' => 'required',
        ];
    }
}
