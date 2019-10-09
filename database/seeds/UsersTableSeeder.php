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
        $user->name = 'Admin';
        $user->email = 'appbogado2019.com';
		$user->password = bcrypt('pasadoyan');
		$user->save();
    }
}
