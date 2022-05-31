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
        DB::table('studentdata')->insert([
            'lastname'=>Str::random(10),
            'firstname'=>Str::random(5),
            'username'=>Str::random(10),
            'address'=>Str::random(10)
        ]);
    }
}
