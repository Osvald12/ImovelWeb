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
        for ($i=1; $i < 10; $i++) { 
            # code...
             DB::table('users')->insert([
                 'name' => str_random(10),
                  'email' => str_random(10).'@gmail.com',
                 'password' => bcrypt('secret'),
                ]);
        }


        
    }
}
