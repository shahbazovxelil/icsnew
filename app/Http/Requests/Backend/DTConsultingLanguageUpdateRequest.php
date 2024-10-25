<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class DTConsultingLanguageUpdateRequest extends FormRequest
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
            'item_one_count' => 'required|numeric',
            'item_one_text' => 'required|string',
            'item_two_count' => 'required|numeric',
            'item_two_text' => 'required|string',
            'item_three_count' => 'required|numeric',
            'item_three_text' => 'required|string',
            'service_title' => 'required|string',
            'service_description' => 'required|string',
            'middle_count_one' => 'required|numeric',
            'middle_count_two' => 'required|numeric',
            'middle_count_three' => 'required|numeric',

            'middle_title' => 'required|string',
            'middle_description' => 'required|string',
            'middle_text_one' => 'required|string',
            'middle_text_two' => 'required|string',
            'middle_text_three' => 'required|string',

            'image' => 'nullable',
            'service_image' => 'nullable',
        ];

    }
}
