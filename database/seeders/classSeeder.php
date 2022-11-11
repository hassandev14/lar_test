<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $faker = Faker::create();
           foreach(range(1,10) as $value){
            DB::table('my_classes')->insert([
            'class_name' => $faker->name() ,
        ]);
        }
    }
}
