<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $projets = Project::where('team_id', auth()->user()->currentTeam->id)->get();
        return view('livewire.projects.index', compact('projets'));
    }
    
    public function delete($id)
    {
        Project::find($id)->delete();
        $this->alert('success', 'Projet deleted!');
    }
}
