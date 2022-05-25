<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::create(
            [
                'title' => 'Laravel Senior Developer',
                'tags' => 'laravel, javascript',
                'company' => 'Acme Corp',
                'location' => 'Boston, MA',
                'email' => 'email1@gmail.com',
                'website' => 'http://www.acme.com',
                'description' => 'Laravel Senior Dev on the run'
            ]);

        Listing::create(
            [
                'title' => 'Full-Stack Engineer',
                'tags' => 'laravel, backend, api',
                'company' => 'Stark Industries',
                'location' => 'New York, NY',
                'email' => 'email2@gmail.com',
                'website' => 'http://www.starkindustries.com',
                'description' => 'Full-Stack Dev on the run'
            ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
