<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndividualObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'id' => 1,
            'individual_objective' => '日本一のラーメン屋に貢献',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('individual_objective')->insert($param);

        $param=[
            'id' => 2,
            'individual_objective' => '日本一の会社に個人で貢献',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('individual_objective')->insert($param);

        $param=[
            'id' => 3,
            'individual_objective' => '個人でも健康ケア',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('individual_objective')->insert($param);
    }
}
