<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'fullname' => 'administrator',
            'email' => 'dunghuava@gmail.com',
            'username' => 'vandung',
            'password' => bcrypt('12345'),
            'birthday' => '1996-07-01'
        ));
    }
}
