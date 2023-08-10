<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'farm' => 'required',
            'number' => 'required|size:8|numeric',
            'type' => 'required|min:2|max:255|string'
        ];
    }
}
