<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndividualKeyResultSeeder extends Seeder
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
            'individual_key_result' => '日本一のラーメン屋に貢献',
            'individual_objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('individual_key_result')->insert($param);

        $param=[
            'id' => 2,
            'individual_key_result' => '日本一の会社に部門で貢献',
            'individual_objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('individual_key_result')->insert($param);

        $param=[
            'id' => 3,
            'individual_key_result' => '部門でヒヤリング',
            'individual_objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('individual_key_result')->insert($param);
    }
}
