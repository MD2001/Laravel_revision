<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Job::factory(30)->create();
        Tag::factory(30)->create();

       
    }
}
