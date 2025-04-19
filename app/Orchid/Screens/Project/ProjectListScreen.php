<?php

namespace App\Orchid\Screens\Project;

use App\Http\Requests\Admin\Project\StoreRequest;
use App\Http\Requests\Admin\Project\UpdateRequest;
use App\Models\Project;
use App\Models\Tag;
use App\Orchid\Layouts\Project\ProjectListRows;
use App\Orchid\Layouts\Project\ProjectListTable;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ProjectListScreen extends Screen
{
    public $name = 'Проєкти';

    public function query(): iterable
    {
        return [
            'projects' => Project::paginate()
        ];
    }

    public function commandBar(): array
    {
        return [
            ModalToggle::make('Створити проєкт')
                ->modal('createProject')
                ->method('create'),
        ];
    }

    public function layout(): array
    {
        return [
            ProjectListTable::class,
            Layout::modal('createProject', ProjectListRows::class)
                ->title('Створити проект')
                ->applyButton('Створити')
                ->closeButton('Закрити'),

            Layout::modal('editProject', ProjectListRows::class)
                ->title('Редагувати проект')
                ->applyButton('Редагувати')
                ->closeButton('Закрити')
                ->async('asyncGetProjects'),
        ];
    }

    public function asyncGetProjects(Project $project)
    {
        return [
            'project' => $project,
            'tags' => Tag::all()->pluck('title', 'id'),
        ];
    }

    public function create(StoreRequest $request)
    {
        $data = $request->validated()['project'];
        Project::query()->create($data);

        Toast::success('Проєкт успішно створений');
    }

    public function update(UpdateRequest $request, Project $project)
    {
        $data = $request->validated()['project'];

        $tagIds = $data['tag_ids'] ?? [];
        unset($data['tag_ids']);

        $project->update($data);
        $project->tags()->sync($tagIds);

        Toast::success('Проєкт успішно оновлений');
    }
}
