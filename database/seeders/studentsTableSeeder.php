<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('students')->insert([
           [
                'studentid'=>'1',
                'name'=>"Ho Thi Loan",
                'gender'=>'Nu',
                'brithday'=>'2003/07/03',
           ] ,
            [
                'studentid'=>'2',
                'name'=>"Ho Thi Tai",
                'gender'=>'Nu',
                'brithday'=>'2003/05/03',
       ],
        ]);
    }
}
