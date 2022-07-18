<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class storeProduct extends FormRequest
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
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'category_id' => 'required',
            'stock' => 'required|numeric',
            'description_en' => 'required',
            'description_ar' => 'required',
            'images' => 'required',
            'price' => 'required',
            'status' => 'required',
            'featured' => 'required',
        ];
    }
}
