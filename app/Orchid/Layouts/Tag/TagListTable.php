<?php

namespace App\Orchid\Layouts\Tag;

use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TagListTable extends Table
{
    protected $target = 'tags';

    protected function columns(): iterable
    {
        return [
            TD::make('id', 'ID')
                ->render(fn ($tag) => $tag->id)
                ->sort(),

            TD::make('title', 'Назва')
                ->render(fn ($tag) => $tag->title),

            TD::make('Actions', 'Дії')
                ->render(function ($tag) {
                    return ModalToggle::make('Редагувати')
                        ->modal('updateTag')
                        ->method('update', ['id' => $tag->id])
                        ->modalTitle('Редагувати тег — ' . $tag->title)
                        ->asyncParameters([
                            'tag' => $tag->id
                        ]);
                }),
        ];
    }
}
