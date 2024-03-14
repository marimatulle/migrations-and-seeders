<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            'Name' => 'Marina',
            'DateOfBirth' => '2000-10-26',
            'Email' => 'marina@gmail.com',
            'RegistrationNumber' => '123456',
            'ClassCourse' => 'Analisys and Systems Development'
        ]);
    }
}