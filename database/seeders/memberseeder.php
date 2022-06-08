<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class memberseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('studentdatas')->insert([
            'LastName'=>Str::random(10),
            'FirstName'=>Str::random(10),
            'Email'=>Str::random(10).' @gmail.com',
            'Address'=>Str::random(10)
        ]);
    }
}
