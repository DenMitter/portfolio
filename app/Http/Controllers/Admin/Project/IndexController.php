<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Кількість записів на сторінку (за замовчуванням 10)
        $search = $request->input('search', '');

        $query = Project::query();

        // Виконуємо пошук, якщо введено текст для пошуку
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $projects = $query->paginate($perPage)->appends(['per_page' => $perPage, 'search' => $search]);
        $projectsCount = $query->count();

        $tags = Tag::all();

        return view('admin.project.index', compact('projects', 'projectsCount', 'perPage', 'search', 'tags'));
    }
}
