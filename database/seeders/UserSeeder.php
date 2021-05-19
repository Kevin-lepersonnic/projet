<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'ricka.31@hotmail.com',
            'name' => 'admin',
            'password' => bcrypt('000000')
        ]);
        
        User::factory()->count(50)->create();
    }
}
