<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Кількість записів на сторінку (за замовчуванням 10)
        $search = $request->input('search', '');

        $query = Tag::query();

        // Виконуємо пошук, якщо введено текст для пошуку
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $tags = $query->paginate($perPage)->appends(['per_page' => $perPage, 'search' => $search]);
        $tagsCount = $query->count();

        return view('admin.tag.index', compact('tags', 'tagsCount', 'perPage', 'search'));
    }
}
