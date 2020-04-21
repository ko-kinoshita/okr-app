<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyResultTableSeeder extends Seeder
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
            'key_result' => '売り上げ300%',
            'group_key_result' => '部門の売り上げ貢献',
            'individual_key_result' => '個人の売り上げ増加',
            'objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('key_result')->insert($param);

        $param=[
            'id' => 2,
            'key_result' => '求人応募50人増',
            'group_key_result' => '求人応募部門ごとでも増加',
            'individual_key_result' => '求人応募個人',
            'objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('key_result')->insert($param);

        $param=[
            'id' => 3,
            'key_result' => '取材うける',
            'group_key_result' => '部門取材受ける',
            'individual_key_result' => '個人取材受ける',
            'objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('key_result')->insert($param);
    }
}
