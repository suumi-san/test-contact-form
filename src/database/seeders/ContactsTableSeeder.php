<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = ['gender' => '1'];
        DB::table('contacts')->insert($param);

        $param = ['gender' => '2'];
        DB::table('contacts')->insert($param);

        $param = ['gender' => '3'];
        DB::table('contacts')->insert($param);
    }
}
