<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('public/blogs');
        Storage::makeDirectory('public/blogs');
        // \App\Models\User::factory(10)->create();
        $this->call(BlogSeeder::class);
    }
}
