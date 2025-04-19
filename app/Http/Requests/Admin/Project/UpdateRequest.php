<?php

namespace App\Http\Requests\Admin\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'project.title' => 'required|string',
            'project.preview_image' => 'string',
            'project.is_published' => 'boolean',
            'project.tag_ids' => 'nullable|array',
            'project.tag_ids.*' => 'nullable|integer|exists:tags,id',
            'project.description' => 'required|string',
            'project.view_link' => 'string',
        ];
    }
}
