<?php

namespace App\Http\Controllers\Admin\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\UpdateRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Project $project) {
        $data = $request->validated();
        
        if(!isset($data['preview_image'])) $data['preview_image'] = $project->preview_image;
        else $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $project->update($data);
        $project->tags()->sync($tagIds);
        return redirect()->route('admin.project.show', compact('project'));
    }
}
