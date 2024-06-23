<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            // IDX
            $table->index('project_id', 'project_tag_project_idx');
            $table->index('tag_id', 'project_tag_tag_idx');

            /// FK
            $table->foreign('project_id', 'project_tag_project_fk')->on('projects')->references('id');
            $table->foreign('tag_id', 'project_tag_tag_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tags');
    }
};
