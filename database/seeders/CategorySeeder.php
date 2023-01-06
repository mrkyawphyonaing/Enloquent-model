<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            'Horrors',
            'Action',
            'Fiction',
            'Scientific Fiction',
            'Mystery',
        ];

        foreach ($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
            ]);
        }

    }
}
