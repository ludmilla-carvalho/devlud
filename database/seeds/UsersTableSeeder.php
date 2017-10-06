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
        DB::table('users')->insert([
            'name' => 'Ludmilla',
            'email' => 'contato@devlud.com.br',
            'password' => bcrypt('secret'),
        ]);

        //factory(\App\User::class, 50)->create();
    }
}
