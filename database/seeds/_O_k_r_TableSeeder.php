<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class _O_k_r_TableSeeder extends Seeder
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
            'objective' => '日本一のラーメン屋',
            'key_result' => '売り上げ300%',
            'parent_id' => null,
            'master_flag' => true,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);

        $param=[
            'id' => 2,
            'objective' => 'SNSで拡散',
            'key_result' => '公式アカウントで毎日拡散',
            'parent_id' => 2,
            'master_flag' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('_o_k_r')->insert($param);

        // $param=[
        //     'id' => 3,
        //     'objective' => '従業員個人でも拡散',
        //     'key_result' => '毎日ツイート',
        //     'parent_id' => 3,
        //     'master_flag' => false,
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        // ];
        // DB::table('_o_k_r')->insert($param);

    }
}
