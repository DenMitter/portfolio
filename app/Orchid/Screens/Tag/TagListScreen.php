<?php

namespace App\Orchid\Screens\Tag;

use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Project;
use App\Models\Tag;
use App\Orchid\Layouts\Tag\TagListTable;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class TagListScreen extends Screen
{
    public $name = 'Теги';

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'tags' => Tag::paginate()
        ];
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Додати тег')
                ->modal('createTag')
                ->method('create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            TagListTable::class,

            Layout::modal('createTag', Layout::rows([
                Input::make('title')
                    ->title('Назва')
                    ->required(),
            ]))
                ->title('Додати тег')
                ->applyButton('Додати')
                ->closeButton('Закрити'),

            Layout::modal('updateTag', Layout::rows([
                Input::make('tag.title')
                    ->title('Назва')
                    ->required(),
            ]))
                ->title('Редагувати тег')
                ->applyButton('Редагувати')
                ->closeButton('Закрити')
                ->async('asyncGetTags'),
        ];
    }

    public function asyncGetTags(Tag $tag)
    {
        return [
            'tag' => $tag,
        ];
    }

    public function create(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::query()->create($data);

        Toast::success('Тег успішно доданий');
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated()['tag'];
        $tag->update($data);

        Toast::success('Тег успішно оновлений');
    }
}
