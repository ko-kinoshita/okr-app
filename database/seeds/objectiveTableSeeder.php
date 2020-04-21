<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class objectiveTableSeeder extends Seeder
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
            'objective' => '日本一のラーメン屋を作る',
            'group_objective' => '日本一のラーメン屋に貢献',
            'individual_objective' => '日本一のラーメン屋に貢献',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);

        $param=[
            'id' => 2,
            'objective' => '日本一の会社を作る',
            'group_objective' => '日本一の会社に部門で貢献',
            'individual_objective' => '日本一の会社に個人で貢献',            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);

        $param=[
            'id' => 3,
            'objective' => '健康になる',
            'group_objective' => '部門でヒヤリング',
            'individual_objective' => '個人でも健康ケア',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);
    }
}
