<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Avatar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        Avatar::create([
            'url' => 'avatar_1.png'
        ]);
        Avatar::create([
            'url' => 'avatar_2.png'
        ]);
        Avatar::create([
            'url' => 'avatar_3.png'
        ]);
        Avatar::create([
            'url' => 'avatar_4.png'
        ]);
        Avatar::create([
            'url' => 'avatar_5.png'
        ]);

        \App\Models\Video::factory()->create([
            'title' => 'Halazia',
            'pitch' => 'a bunch of young people try to save the world',
            'summary' => 'a bunch of young people try to save the world from robots and push people to get back their emotions.'
        ]);

        \App\Models\Video::factory()->create([
            'title' => 'Wave',
            'pitch' => 'Friends go to the beach',
            'summary' => 'Gonbbae Gonbbae ding ding dancing till sunset'
        ]);

        \App\Models\Video::factory()->create([
            'title' => 'Sugar Rush Ride',
            'pitch' => 'Yipee',
            'summary' => 'Wop Woop that\'s dark shit'
        ]);
    }
}
