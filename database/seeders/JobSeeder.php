<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(5)->create();
        $jobs = Job::factory(5)->hasAttached($tags)->create();
        // $jobs[0]->tags()->attach($tags[1]);
        // $jobs[1]->tags()->attach($tags[4]);
        // $jobs[2]->tags()->attach($tags[1]);
        // $jobs[3]->tags()->attach($tags[2]);
        // $jobs[3]->tags()->attach($tags[4]);
        // $jobs[4]->tags()->attach($tags[1]);
        // $jobs[1]->tags()->attach($tags[1]);
    }
}
