<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $s1=[
        'u_id'=>203,
        'name'=>'mostafa',
        'is_admin'=>'admin',
        'email'=>'mostafa.emam@school.com',
        'password' => Hash::make('password'),
        'address'=>'mansoura',
        'dob'=>'1995-03-20',
        'blood_type'=>'A+',
        'img'=>'uploads/avatar/avatar.png',
        'job'=>'admin',
        'age'=>25,
        'type'=>'male'
       ];

    $s2 = [
        'u_id' => 300,
        'name' => 'rewan zain',
        'is_admin' => 'student',
        'email' => 'rewan.zain@school.com',
        'password' => Hash::make('password'),
        'level' => 1,
        'parent_id'=>400,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 7,
        'type' => 'female'
    ];
    $s3 = [
        'u_id' => 301,
        'name' => 'mahmoud siliman',
        'is_admin' => 'student',
        'email' => 'mahmoud.siliman@school.com',
        'password' => Hash::make('password'),
        'level' => 1,
        'parent_id' => 401,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 7,
        'type' => 'male'
    ];
    $s4 = [
        'u_id' => 302,
        'name' => 'khaled elsaba',
        'is_admin' => 'student',
        'email' => 'khaled.elsaba@school.com',
        'password' => Hash::make('password'),
        'level' => 1,
        'parent_id' => 402,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 7,
        'type' => 'male'
    ];
    $s5 = [
        'u_id' => 303,
        'name' => 'aya mohamed',
        'is_admin' => 'student',
        'email' => 'aya.mohamed@school.com',
        'password' => Hash::make('password'),
        'level' => 1,
        'parent_id' => 403,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 7,
        'type' => 'female'
    ];
    $s6 = [
        'u_id' => 400,
        'name' => 'zain eldin',
        'is_admin' => 'parent',
        'email' => 'zain.eldin@school.com',
            'password' => Hash::make('password'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
        'type' => 'male'
    ];
    $s7 = [
        'u_id' => 401,
        'name' => 'siliman mohamed',
        'is_admin' => 'parent',
        'email' => 'siliamn.mohamed@school.com',
        'password' => Hash::make('password'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
        'type' => 'male'
    ];
    $s8 = [
        'u_id' => 402,
        'name' => 'elsaba mohamed',
        'is_admin' => 'parent',
        'email' => 'elsaba.mohamed@school.com',
        'password' => Hash::make('password'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
        'type' => 'male'
    ];
    $s9 = [
        'u_id' => 403,
        'name' => 'nada ahmed',
        'is_admin' => 'parent',
        'email' => 'nada.ahmed@school.com',
        'password' => Hash::make('password'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
        'type' => 'female'
    ];

    user::create($s1);
    user::create($s2);
    user::create($s3);
    user::create($s4);
    user::create($s5);
    user::create($s6);
    user::create($s7);
    user::create($s8);
    user::create($s9);




    }
}
