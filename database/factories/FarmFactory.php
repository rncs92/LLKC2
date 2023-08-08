<?php declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FarmFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => User::all()->random(),
            'name' => $this->faker->company(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url()
        ];
    }
}
