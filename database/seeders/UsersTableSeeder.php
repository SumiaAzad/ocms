<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([

        'name'=>'admin',
        'gender'=>'male',
        'birth'=>'02/04/1998',
        'class'=>'1',
        'join'=>'09/10/2021',
        'mobile'=>'01645205703',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('1234'),
        'status'=>'yes',
        'role'=>'admin',
        'father_name'=>'Azad',
        'father_mobile'=>'01712251945',
        'mother_name'=>'khoki',
        'mother_mobile'=>'01729976812',
        'address'=>'uttara',
        'image'=>'laboni',
        

       ]);
    }
}
