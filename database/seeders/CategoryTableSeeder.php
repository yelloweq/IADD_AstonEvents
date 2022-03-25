<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [['name' => 'Sports'],['name' => 'Culture'],['name' => 'Other']];
        foreach ($categories as $cat){
            DB::table('categories')->insert($cat);
        }
    }
}
