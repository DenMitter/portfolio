<?php

namespace App\Orchid\Layouts\Project;

use App\Models\Tag;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ProjectListRows extends Rows
{
    protected $title;

    protected function fields(): iterable
    {
        return [
            Input::make('project.title')
                ->title('Назва')
                ->required(),

            TextArea::make('project.description')
                ->title('Опис')
                ->rows(5)
                ->required(),

            Group::make([
                Input::make('project.view_link')
                    ->title('Посилання')
                    ->placeholder('https://example.com'),

                CheckBox::make('project.is_published')
                    ->title('Чи публічний проект')
                    ->sendTrueOrFalse(),
            ]),

            Relation::make('project.tag_ids')
                ->title('Теги')
                ->fromModel(Tag::class, 'title')
                ->display('title')
                ->multiple()
                ->chunk(50)
                ->value(
                    isset($this->query['project']) && $this->query['project']->tags
                        ? $this->query['project']->tags->pluck('id')->toArray()
                        : []
                ),

            Picture::make('project.preview_image')
                ->title('Фото'),
        ];
    }
}
