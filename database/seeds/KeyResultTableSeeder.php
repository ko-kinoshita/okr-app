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
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('key_result')->insert($param);

        $param=[
            'id' => 2,
            'key_result' => '求人応募50人増',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('key_result')->insert($param);

        $param=[
            'id' => 3,
            'key_result' => '取材うける',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('key_result')->insert($param);
    }
}
