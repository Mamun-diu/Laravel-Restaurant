<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Restaurant_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'name'=>'KFC restaurant',
                'email'=>'kfc@test.com',
                'address'=>'mirpur,Dhaka'
            ],
            [
                'name'=>'OM sweets',
                'email'=>'om@test.com',
                'address'=>'Dinajpur'
            ],
            [
                'name'=>'Dominos Restaurant',
                'email'=>'dominos@test.com',
                'address'=>'Bogra'
            ],
            [
                'name'=>'mcdonalds Restaurant',
                'email'=>'mcdonalds@test.com',
                'address'=>'Kumilla'
            ],
            [
                'name'=>'Natural Food',
                'email'=>'natural@test.com',
                'address'=>'Rangpur'
            ],
            [
                'name'=>'Spice Food',
                'email'=>'spice@test.com',
                'address'=>'Thakurgaon'
            ]

        ]);
    }
}
