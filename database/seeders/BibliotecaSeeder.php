<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'Title' => 'Clean Code',
            'AuthorPublisher' => 'Robert Cecil Martin',
            'PublicationDate' => '2008-08-01',
            'GenreType' => 'Educational',
            'AvailableCopies' => 5,
        ]);
    }
}
