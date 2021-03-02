<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Note;
use App\Models\Todo;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Item::factory(10)->create();
        \App\Models\Note::factory(10)->create();
        \App\Models\Todo::factory(10)->create();
        \App\Models\Comment::factory(20)->create();

    }
}
