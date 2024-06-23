<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() {
        $projects = Project::where('is_published', 1)->paginate(3);
        $tags = Tag::all();

        return view('main.index', compact('projects', 'tags'));
    }   
      
}
