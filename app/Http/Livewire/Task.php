<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{

    public $taskId = "";

    public $taskLabel = "";

    public $taskDone = "";

    public function mount($taskId, $taskLabel, $taskDone)
    {
        $this->taskId = $taskId;
        
        $this->taskLabel = $taskLabel;

        $this->taskDone = $taskDone;
    }    

    public function render()
    {
        return view('livewire.task');
    }

    public function editTask()
    {
        
    }

    public function deleteTask()
    {
        
    }

}
