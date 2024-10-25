<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class MenuStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
             'parent_id'=>'required',
             'name'=>'required|string|unique:menu_translations',
             'slug'=>'required|string|unique:menu_translations',
        ];
    }
}
