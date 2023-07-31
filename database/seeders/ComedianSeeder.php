<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ComedianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comedians')->insert([
            'name' => '和牛',
            'note'=> '3年連続準優勝(2016,2017,2018)　決勝出場回数5回',
            ]);
        DB::table('comedians')->insert([
            'name' => 'ジャルジャル',
            'note'=> '決勝出場回数4回',
            ]);
        DB::table('comedians')->insert([
            'name' => '見取り図',
            'note'=> '決勝出場回数3回',
            ]);
        DB::table('comedians')->insert([
            'name' => 'ミキ',
            'note'=> '決勝出場回数2回　敗者復活枠(2018)',
            ]);
        DB::table('comedians')->insert([
            'name' => 'かまいたち',
            'note'=> '準優勝(2019) 決勝出場回数3回',
            ]);
        DB::table('comedians')->insert([
            'name' => 'トム・ブラウン',
            'note'=> '決勝出場回数1回',
            ]);
        DB::table('comedians')->insert([
            'name' => 'スーパーマラドーナ',
            'note'=> '決勝出場回数4回　敗者復活枠(2017)',
            ]);
        DB::table('comedians')->insert([
            'name' => 'ギャロップ',
            'note'=> '決勝出場回数1回',
            ]);
        DB::table('comedians')->insert([
            'name' => 'ゆにばーす',
            'note'=> '決勝出場回数3回',
            ]);
    }
}
