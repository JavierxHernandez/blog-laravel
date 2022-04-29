<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Storage::deleteDirectory('public/posts');

        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);
        Tag::factory(8)->create();

        Storage::makeDirectory('public/posts');

        $this->call(PostSeeder::class);
    }
}
