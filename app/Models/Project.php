<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'project_tags', 'project_id', 'tag_id');
    }
}
