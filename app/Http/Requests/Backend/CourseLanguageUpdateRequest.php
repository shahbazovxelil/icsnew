<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CourseLanguageUpdateRequest extends FormRequest
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
            'image' => 'nullable',
            'name' => 'string',
            'price' => 'required',
            'duration' => 'required',
            'slug' => 'required',
            'student_count' => 'required|numeric',
            'start_date' => 'required',
        ];

    }
}
