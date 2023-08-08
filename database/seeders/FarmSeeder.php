<?php declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Farm;
use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    public function run(): void
    {
        Farm::factory(2)->create();
    }
}
