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
        'id'=>203,
        'name'=>'mostafa emam',
        'is_admin'=>'admin',
        'email'=>'mostafa.emam@school.com',
        'password' => Hash::make('test123'),
        'address'=>'mansoura',
        'dob'=>'1995-03-20',
        'blood_type'=>'A+',
        'img'=>'uploads/avatar/avatar.png',
        'job'=>'admin',
        'age'=>25,
        'type'=>'male'
       ];

    $s2 = [
        'id' => 300,
        'name' => 'rewan zain',
        'is_admin' => 'student',
        'email' => 'rewan.zain@school.com',
        'password' => Hash::make('test123'),
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
        'id' => 301,
        'name' => 'mahmoud siliman',
        'is_admin' => 'student',
        'email' => 'mahmoud.siliman@school.com',
        'password' => Hash::make('test123'),
        'level' => 2,
        'parent_id' => 401,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 8,
        'type' => 'male'
    ];
    $s4 = [
        'id' => 302,
        'name' => 'khaled elsaba',
        'is_admin' => 'student',
        'email' => 'khaled.elsaba@school.com',
        'password' => Hash::make('test123'),
        'level' => 3,
        'parent_id' => 402,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 9,
        'type' => 'male'
    ];
    $s5 = [
        'id' => 303,
        'name' => 'rahma mohamed',
        'is_admin' => 'student',
        'email' => 'rahma.mohamed@school.com',
        'password' => Hash::make('test123'),
        'level' => 4,
        'parent_id' => 403,
        'address' => 'mansoura',
        'dob' => '2013-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 10,
        'type' => 'female'
    ];
    $s6 = [
        'id' => 400,
        'name' => 'zain eldin',
        'is_admin' => 'parent',
        'email' => 'zain.eldin@school.com',
        'password' => Hash::make('test123'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
        'job' =>'teacher',
        'type' => 'male'
    ];
    $s7 = [
        'id' => 401,
        'name' => 'siliman mohamed',
        'is_admin' => 'parent',
        'email' => 'siliamn.mohamed@school.com',
        'password' => Hash::make('test123'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
            'job' => 'teacher',
        'type' => 'male'
    ];
    $s8 = [
        'id' => 402,
        'name' => 'elsaba mohamed',
        'is_admin' => 'parent',
        'email' => 'elsaba.mohamed@school.com',
        'password' => Hash::make('test123'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
            'job' => 'teacher',
        'type' => 'male'
    ];
    $s9 = [
        'id' => 403,
        'name' => 'nada ahmed',
        'is_admin' => 'parent',
        'email' => 'nada.ahmed@school.com',
        'password' => Hash::make('test123'),
        'address' => 'mansoura',
        'dob' => '1998-03-01',
        'blood_type' => 'A+',
        'img' => 'uploads/avatar/avatar.png',
        'age' => 30,
            'job' => 'teacher',
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
