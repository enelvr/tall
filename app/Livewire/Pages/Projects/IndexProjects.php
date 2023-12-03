<?php

namespace App\Livewire\Pages\Projects;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Project;

class IndexProjects extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $search = '';

    public function render()
    {
        
        return view('livewire.pages.projects.index-projects', [
            'projects' => Project::query()
                ->filter($this->search)
                ->latest()
                ->paginate(5)
        ])
        ->layout('layouts.app');
    }

    public function deleteProject($projectId)
    {
        $project = Project::find($projectId);

        if ($project) {
            $project->delete();
        }

        $this->alert('success', 'Proyecto eliminado con éxito.');
    }
}
