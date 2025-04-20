<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Laravel',
            'Vue',
            'PHP',
            'JavaScript',
            'Design',
            'Backend',
            'Frontend'
        ];

        foreach ($tags as $tagName) {
            Tag::query()->firstOrCreate(['title' => $tagName]);
        }
    }
}
