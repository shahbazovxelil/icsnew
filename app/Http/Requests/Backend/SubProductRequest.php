<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SubProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'product_id' => 'required|exists:products,id',
            'name.*' => 'required|string|max:255',
            'title.*' => 'nullable|string|max:255',
            'msds_text.*' => 'nullable|string',
            'msds_image.*' => 'nullable|file|mimes:jpg,jpeg,png',
            'tds_text.*' => 'nullable|string',
            'tds_image.*' => 'nullable|file|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Alt ürünü oluşturmak için bir ürün seçmelisiniz.',
//            'product_id.exists' => 'Seçtiğiniz ürün mevcut değil.',
            'name.*.required' => 'İsim alanı gereklidir.',
            'title.*.required' => 'Başlık alanı gereklidir.',
            'msds_text.*.required' => 'MSDS metni alanı gereklidir.',
            'msds_image.*.required' => 'MSDS görseli gereklidir.',
            'tds_text.*.required' => 'TDS metni alanı gereklidir.',
            'tds_image.*.required' => 'TDS görseli gereklidir.',
            'msds_image.*.mimes' => 'MSDS görseli yalnızca jpg, jpeg veya png formatında olmalıdır.',
            'tds_image.*.mimes' => 'TDS görseli yalnızca jpg, jpeg veya png formatında olmalıdır.',
            'msds_image.*.max' => 'MSDS görseli maksimum 2MB olmalıdır.',
            'tds_image.*.max' => 'TDS görseli maksimum 2MB olmalıdır.',
        ];
    }
}
