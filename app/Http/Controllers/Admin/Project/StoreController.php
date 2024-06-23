<?php

namespace App\Http\Controllers\Admin\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        try {
            $data = $request->validated();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            
            $project = Project::firstOrCreate($data);
            $project->tags()->attach($tagIds);
        } catch(\Exception $exception) {
            abort(500);
        }
        return redirect()->route('admin.project.index');
    }
}
