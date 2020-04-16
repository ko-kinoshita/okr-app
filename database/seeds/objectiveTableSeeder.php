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
            'objective' => '知識を増やす',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);

        $param=[
            'id' => 2,
            'objective' => '生活習慣を乱さない',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);

        $param=[
            'id' => 3,
            'objective' => '健康的な食事を心がける',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);
    }
}
