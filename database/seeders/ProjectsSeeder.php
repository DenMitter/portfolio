<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $project = Project::query()->create([
                'title' => "Project {$i}",
                'description' => "Опис для Project {$i}",
                'preview_image' => env('APP_URL') . "/storage/images/project{$i}.png",
                'is_published' => true,
            ]);

            $randomTags = Tag::query()->inRandomOrder()->limit(rand(2, 3))->pluck('id');
            $project->tags()->attach($randomTags);
        }
    }
}
