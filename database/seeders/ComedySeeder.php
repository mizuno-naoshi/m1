<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ComedySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comedies')->insert([
            'title' => '豪華客船',
            'script' => 'どうも霜降り明星ですお願いします',
            'comedian_id' => 1,
            'year' => '2018',
            'rank' => '1位',
            ]);
    }
}
