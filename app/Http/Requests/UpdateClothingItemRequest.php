<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClothingItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|string',
            'category' => 'sometimes|string',
            'color' => 'sometimes|string',
            'size' => 'sometimes|string',
            'brand' => 'sometimes|string',
            'material' => 'sometimes|string',
            'season' => 'sometimes|string',
            'image' => 'sometimes|image|max:2048',
        ];
    }
}
