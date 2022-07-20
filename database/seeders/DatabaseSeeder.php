<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();		
		for ($i = 1; $i <= 10; $i++) {
			$str = (string) $i;
			DB::table('users')->insert([
				'name' => $str,
				'email' => $str.'@gmail.com',
				'password' => Hash::make($str),
			]);
		}
    }
}
