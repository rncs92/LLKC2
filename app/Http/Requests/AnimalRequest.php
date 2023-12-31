<?php declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\MaxAnimalsPerFarm;
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
            'farm' => new MaxAnimalsPerFarm,
            'number' => 'required|digits:8|numeric|unique:animals,animal_number',
            'type' => 'required|min:2|max:255|string',
            'years' => 'nullable|numeric'
        ];
    }
}
