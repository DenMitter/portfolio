<?php
namespace App\Actions\Project;

use App\Models\Project;
use App\Services\ImageService;

class CreateProjectAction
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function handle(array $data): Project
    {
        if (isset($data['preview_image'])) {
            $data['preview_image'] = $this->imageService->upload($data['preview_image']);
        }

        $tagIds = $data['tag_ids'] ?? [];
        unset($data['tag_ids']);

        $project = Project::create($data);
        $project->tags()->attach($tagIds);

        return $project;
    }
}
