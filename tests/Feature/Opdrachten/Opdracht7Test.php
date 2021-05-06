<?php

use App\Models\Project;

beforeEach(function (){
    $this->project = Project::factory()->create();
    $this->seed('ProjectSeeder');
});

test('show page is visable with project on the page', function()
{
    $this->withoutExceptionHandling();
    $this->get(route('projects.index'))
        ->assertViewIs('admin.projects.index')
        ->assertSee($this->project->id)
        ->assertSee($this->project->name)
        ->assertSee($this->project->description)
        ->assertSee($this->project->created_at)
        ->assertStatus(200);
})->group('Opdracht7');
