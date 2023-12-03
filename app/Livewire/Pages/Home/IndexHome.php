<?php

namespace App\Livewire\Pages\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;

class IndexHome extends Component
{
    use WithPagination;

    public function render()
    {
        
        return view('livewire.pages.home.index-home', [
            'projects' => Project::query()
                ->IsPublic()
                ->latest()
                ->paginate(6)
        ])
        ->layout('layouts.landing');
    }
}