<?php declare(strict_types=1);

namespace App\Rules;

use App\Models\Animal;
use App\Models\Farm;
use Illuminate\Contracts\Validation\Rule;

class MaxAnimalsPerFarm implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value): bool
    {
        $farm = Farm::findOrFail($value);

        return $farm->animals->count() < 3;
    }

    public function message(): string
    {
        return 'Atvainojiet, bet maksimālais atļautais dzīvnieku skaits fermā ir sasniegts!';
    }
}
