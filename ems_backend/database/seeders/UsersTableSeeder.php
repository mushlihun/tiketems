<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'List Creative ',
                'email' => 'listcreative15@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$17q0x4ktkYfQgIrTIsXOc.pntfVHOoboHOORQHfFScaqzWQ/fxQDG',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:00',
                'updated_at' => '2021-05-29 20:36:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mr John',
                'email' => 'john@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$17q0x4ktkYfQgIrTIsXOc.pntfVHOoboHOORQHfFScaqzWQ/fxQDG',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:21',
                'updated_at' => '2021-05-29 20:36:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'smith',
                'email' => 'smith@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$17q0x4ktkYfQgIrTIsXOc.pntfVHOoboHOORQHfFScaqzWQ/fxQDG',
                'remember_token' => NULL,
                'created_at' => '2021-05-29 20:36:37',
                'updated_at' => '2021-05-29 20:36:37',
            ),
        ));
        
        
    }
}