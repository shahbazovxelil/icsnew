<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CourseItemBannerStoredRequest extends FormRequest
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
            'image'=>'nullable',
            'title'=>'required|string',
            'course_id'=>'required|numeric',
            'long_description'=>'required|string',
            'item_one'=>'required|string',
            'item_two'=>'required|string',
            'item_three'=>'required|string',
            'item_four'=>'required|string',
        ];
    }
}
