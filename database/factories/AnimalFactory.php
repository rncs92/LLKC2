<?php declare(strict_types=1);

namespace Database\Factories;

use App\Models\Farm;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    public function definition(): array
    {
        return [
            'farm_id' => Farm::all()->random(),
            'animal_number' => $this->faker->numerify('########'),
            'type_name' => $this->faker->randomElement(['Dog', 'Cat', 'Bird', 'Fish', 'Cow', 'Horse', 'Sheep', 'Chicken']),
            'years' => $this->faker->numberBetween(0, 60)
        ];
    }
}
