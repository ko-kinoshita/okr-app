<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupObjectiveSeeder extends Seeder
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
            'group_objective' => '日本一のラーメン屋に貢献',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('group_objective')->insert($param);

        $param=[
            'id' => 2,
            'group_objective' => '日本一の会社に部門で貢献',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('group_objective')->insert($param);

        $param=[
            'id' => 3,
            'group_objective' => '部門でヒヤリング',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('group_objective')->insert($param);
    }
}
