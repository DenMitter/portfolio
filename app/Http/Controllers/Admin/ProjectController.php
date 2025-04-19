<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Project\CreateProjectAction;
use App\Actions\Project\UpdateProjectAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreRequest;
use App\Http\Requests\Admin\Project\UpdateRequest;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Кількість записів на сторінку (за замовчуванням 10)
        $search = $request->input('search', '');

        $projectsQuery = Project::query();

        if ($search) {
            $projectsQuery->where('title', 'like', '%' . $search . '%');
        }

        $projectsCount = $projectsQuery->count();
        $projects = $projectsQuery->paginate($perPage)->appends(compact('perPage', 'search'));

        $tags = Tag::all();

        return view('admin.project.index', compact('projects', 'projectsCount', 'perPage', 'search', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.project.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request, CreateProjectAction $action)
    {
        $action->handle($request->validated());
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $tags = Tag::all();
        return view('admin.project.show', compact('project', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $tags = Tag::all();
        return view('admin.project.edit', compact('project', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Project $project, UpdateProjectAction $action)
    {
        $action->handle($project, $request->validated());
        return redirect()->route('admin.project.show', $project)->with('success', 'Проєкт оновлено');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->preview_image && Storage::disk('public')->exists($project->preview_image)) {
            Storage::disk('public')->delete($project->preview_image);
        }

        $project->tags()->detach();
        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Проєкт видалено');
    }
}
