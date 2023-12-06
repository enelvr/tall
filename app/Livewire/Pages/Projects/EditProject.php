<?php

namespace App\Livewire\Pages\Projects;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Project;

class EditProject extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $id, $title, $description, $image, $is_public = true;

    public function mount($id)
    {
        $this->id = $id;
        $project = Project::findOrFail($id);
        $this->title = $project->title;
        $this->description = $project->description;
        $this->is_public = (bool) $project->is_public;
    }

    public function render()
    {
        return view('livewire.pages.projects.edit-project')
        ->layout('layouts.app');
    }

    public function updateProject()
    {
        try {

            $this->validate([
                'title' => 'required',
                'description' => 'required',
            ]);
    
            $project = Project::findOrFail($this->id);

            if ($this->image) {
                $imagenPath = $this->image->store('/projects');
                $project->update(['image' => $imagenPath]);
            }

            $project->update([
                'title' => $this->title,
                'description' => $this->description,
                'is_public' => $this->is_public,
            ]);

        $this->alert('success', 'Proyecto actualizado con éxito.');

        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
            $this->alert('error', $th->getMessage());
        }
    }
}
