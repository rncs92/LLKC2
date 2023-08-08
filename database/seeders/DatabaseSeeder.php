<?php declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Farm;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(2)->create()->each(function ($user) {
            $farmsCount = $user->farms->count();
            if ($farmsCount < 2) {
                $farmsToCreate = 2 - $farmsCount;
                $farms = Farm::factory($farmsToCreate)->create(['user_id' => $user->id]);

                $farms->each(function ($farm) {
                    $farm->animals()->saveMany(
                        Animal::factory(3)->make()
                    );
                });
            } else {
                $user->farms->each(function ($farm) {
                    $animalsCount = $farm->animals->count();
                    if ($animalsCount < 3) {
                        $animalsToCreate = 3 - $animalsCount;
                        $farm->animals()->saveMany(
                            Animal::factory($animalsToCreate)->make()
                        );
                    }
                });
            }
        });
    }
}
