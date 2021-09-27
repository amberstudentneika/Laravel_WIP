<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creating Admin User
        $admin = [
            [
                'name' => 'Neika Lewis',
                'email' => 'nlewis@elagi.edu.jm',
                'password' => bcrypt('password'),
                'tele' => '876-290-00243',
                'is_admin' => '1'
            ]
        ];
        foreach($admin as $key => $value){
            User::Create($value);
        }
    }
}
