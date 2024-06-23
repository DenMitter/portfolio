<?php

namespace App\Http\Controllers\Admin\Project;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Project $project) {
        $tags = Tag::all();
        return view('admin.project.edit', compact('project', 'tags'));
    }
}
