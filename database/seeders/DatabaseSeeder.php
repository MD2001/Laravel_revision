<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $jobs=Job::factory(30)->create();
        $tags=Tag::factory(30)->create();

        foreach ($jobs as $job) {
            $randomTags = $tags->random(rand(1, 3))->pluck('id')->toArray();

            foreach ($randomTags as $tagId) {
                DB::table('job_tag')->insert([
                    'jobs_listings_id' => $job->id,
                    'tag_id' => $tagId,
                    'created_at' => now(),
                    'updated_at' => now(),]);
                }
            }
    }
}
