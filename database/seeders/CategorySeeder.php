<?php

namespace Database\Seeders;

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
        DB::table('categories')->insert([
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'Developpement web'
            ],
            [
                'name' => 'Developpement mobile'
            ],
            [
                'name' => 'Framework'
            ],
            [
                'name' => 'MVC'
            ],
            [
                'name' => 'Gestion de projet'
            ],
            [
                'name' => 'Javascript'
            ]
        ]);
    }
}