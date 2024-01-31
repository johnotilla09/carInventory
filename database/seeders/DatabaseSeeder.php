<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CarList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        CarList::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // CarList::create([
        //     'title' => 'Honda City',
        //         'tags' => 'Honda, Ford',
        //         'company' => 'Honda',
        //         'location' => 'United States of America',
        //         'email' => 'test@example.com',
        //         'website' => 'http://example.com',
        //         'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus facilis molestias delectus quod rerum dolorem molestiae obcaecati voluptates facere ab fugit incidunt ipsum beatae voluptatem natus quo iste itaque dolore repellendus tempore, qui, laudantium, iusto fuga in! Deserunt fuga, eligendi nisi error autem voluptatibus porro laudantium rem ducimus temporibus delectus.'
        // ]);

        // CarList::create([
        //     'title' => 'Honda City',
        //         'tags' => 'Honda, Ford',
        //         'company' => 'Honda',
        //         'location' => 'United States of America',
        //         'email' => 'test@example.com',
        //         'website' => 'http://example.com',
        //         'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus facilis molestias delectus quod rerum dolorem molestiae obcaecati voluptates facere ab fugit incidunt ipsum beatae voluptatem natus quo iste itaque dolore repellendus tempore, qui, laudantium, iusto fuga in! Deserunt fuga, eligendi nisi error autem voluptatibus porro laudantium rem ducimus temporibus delectus.'
        // ]);
    }
}
