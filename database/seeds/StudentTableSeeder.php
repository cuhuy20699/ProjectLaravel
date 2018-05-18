<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name'=> 'ngoloc', 'rollnumber'=>'A002','email'=>'loc@gmail.com','phone'=>'0999999999'],
            ['name'=> 'binhminh', 'rollnumber'=>'A003','email'=>'minh@gmail.com','phone'=>'0123456789'],
            ['name'=> 'dinhthai', 'rollnumber'=>'A004','email'=>'thai@gmail.com','phone'=>'0969696969'],
            ['name'=> 'anhhoang', 'rollnumber'=>'A005','email'=>'hoang@gmail.com','phone'=>'0923456456'],
            ['name'=> 'huuthong', 'rollnumber'=>'A006','email'=>'thong@gmail.com','phone'=>'0986868686'],
            ['name'=> 'phanhung', 'rollnumber'=>'A007','email'=>'hung@gmail.com','phone'=>'0946578932']
        ]);
    }
}
