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
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('objective')->insert($param);
    }
}
