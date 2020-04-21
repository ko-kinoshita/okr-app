<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            objectiveTableSeeder::class,
            KeyResultTableSeeder::class,
            GroupKeyResultSeeder::class,
            GroupObjectiveSeeder::class,
            IndividualKeyResultSeeder::class,
            IndividualObjectiveSeeder::class,
        ]);
    }
}
