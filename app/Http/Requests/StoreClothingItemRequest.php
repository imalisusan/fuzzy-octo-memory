<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClothingItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category' => 'required|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'brand' => 'nullable|string',
            'material' => 'nullable|string',
            'season' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ];
    }
}
