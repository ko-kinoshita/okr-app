<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupKeyResultSeeder extends Seeder
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
            'group_key_result' => '部門の売り上げ貢献',
            'group_objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('group_key_result')->insert($param);

        $param=[
            'id' => 2,
            'group_key_result' => '求人応募部門ごとでも増加',
            'group_objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('group_key_result')->insert($param);

        $param=[
            'id' => 3,
            'group_key_result' => '部門取材受ける',
            'group_objective_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('group_key_result')->insert($param);
    }
}
