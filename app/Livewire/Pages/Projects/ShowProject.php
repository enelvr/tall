<?php

namespace App\Livewire\Pages\Projects;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Project;

class ShowProject extends Component
{

    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $project = Project::findOrFail($this->id);
        return view('livewire.pages.projects.show-project', compact('project'))
        ->layout('layouts.app');
    }
}
