<?php

namespace App\Orchid\Layouts\Project;

use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProjectListTable extends Table
{
    protected $target = 'projects';

    protected function columns(): iterable
    {
        return [
            TD::make('id', 'ID')
                ->sort()
                ->render(fn ($project) => $project->id),

            TD::make('title', 'Назва')
                ->sort()
                ->render(fn ($project) => $project->title),

            TD::make('created_at', 'Створено')
                ->render(fn ($project) => $project->created_at->toDateString()),

            TD::make('Actions', 'Дії')
                ->render(function ($project) {
                    return ModalToggle::make('Редагувати')
                        ->modal('editProject')
                        ->method('update', ['id' => $project->id])
                        ->modalTitle('Редагувати проєкт — ' . $project->title)
                        ->asyncParameters([
                            'project' => $project->id
                        ]);
                }),
        ];
    }
}
