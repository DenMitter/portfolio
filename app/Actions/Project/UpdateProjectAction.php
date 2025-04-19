<?php
namespace App\Actions\Project;

use App\Models\Project;
use App\Services\ImageService;

class UpdateProjectAction
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function handle(Project $project, array $data): Project
    {
        if (isset($data['preview_image'])) {
            $this->imageService->delete($project->preview_image);
            $data['preview_image'] = $this->imageService->upload($data['preview_image']);
        } else {
            $data['preview_image'] = $project->preview_image;
        }

        $tagIds = $data['tag_ids'] ?? [];
        unset($data['tag_ids']);

        $project->update($data);
        $project->tags()->sync($tagIds);

        return $project;
    }
}
