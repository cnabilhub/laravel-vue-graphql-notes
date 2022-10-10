<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Note;
use App\Models\Tag;
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
         \App\Models\User::factory(10)->create();
         \App\Models\Note::factory(10)->create();
         \App\Models\Tag::factory(10)->create();
//         \App\Models\NoteTag::factory(10)->create();

        $tags = Tag::all();

        Note::all()->each(function ($note) use ($tags) {
            $note->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
