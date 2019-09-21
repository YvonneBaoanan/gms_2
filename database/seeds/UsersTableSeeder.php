<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
		$user->password = Hash::make('pasadoyan');
		$user->email = 'appbogado2019@gmail.com';
		$user->name = 'App Bogado';
		$user->save();
    }
}
