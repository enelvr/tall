<?php

namespace App\Livewire\Pages\Projects;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Project;

class CreateProject extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $title, $description, $image, $is_public = true;

    public function render()
    {
        return view('livewire.pages.projects.create-project')
        ->layout('layouts.app');
    }

    public function storeProject()
    {
        try {
        
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:1024', // 1MB max
        ]);

        $imagenPath = $this->image->store('/projects');

        Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $imagenPath,
            'is_public' => $this->is_public,
            'user_id' => \auth()->user()->id
        ]);

        $this->resetInputFields();

        $this->alert('success', 'Proyecto creado con éxito.');
        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
            $this->alert('error', $th->getMessage());
        }
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->is_public = true;
    }
}
