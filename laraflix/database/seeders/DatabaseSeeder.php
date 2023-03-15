<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Video::factory()->create([
            'title' => 'Halazia',
            'pitch' => 'a bunch of young people try to save the world',
            'summary' => 'a bunch of young people try to save the world from robots and push people to get back their emotions.'
        ]);

        \App\Models\Video::factory()->create([
            'title' => 'Halazia',
            'pitch' => 'a bunch of young people try to save the world',
            'summary' => 'a bunch of young people try to save the world from robots and push people to get back their emotions.'
        ]);
    }
}
