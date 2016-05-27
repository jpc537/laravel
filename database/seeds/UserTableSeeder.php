<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

	public function run(){

		DB::table('users')->insert(array(
			'name'=>'admin',
			'email'=>'admin@gmail.com',
			'password'=>\Hash::make('internet'),
			'activo'=>true,
			'rol'=>'admin'
			));
	}
}