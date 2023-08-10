<?php declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FarmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|min:3|max:255|unique:farms,email',
            'website' => 'nullable|max:255',
        ];
    }
}
