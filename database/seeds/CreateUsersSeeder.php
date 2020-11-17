<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'first_name'=>'Admin',
                'middle_name'=>'The',
                'last_name'=>'Great',
                'address' => '123 Address to Heaven',
                'contact' => '123456789',
                'email'=>'admin@mail.com',
                'personnel_type'=>'admin',
                'password'=> bcrypt('123456'),
            ]
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
