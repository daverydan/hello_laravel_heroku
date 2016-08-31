<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        [
		        'name' => 'Danny Avery',
		        'email' => 'me@me.com',
		        'password' => bcrypt('secret'),
		        'created_at' => new DateTime,
		        'updated_at' => new DateTime,
	        ],
	        [
		        'name' => 'Other User',
		        'email' => 'me2@me.com',
		        'password' => bcrypt('secret'),
		        'created_at' => new DateTime,
		        'updated_at' => new DateTime,
	        ],
		]);
    }
}
