<?php

namespace App\Http\Controllers\Admin\Project;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke() {
        $tags = Tag::all();
        return view('admin.project.create', compact('tags'));
        // return view('admin.project.create');
    }
}
