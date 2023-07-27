<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public $tasks = [];

    public $task = '';

    public function render()
    {
        return view('livewire.todo');
    }

    public function addTask()
    {
        array_push($this->tasks, [
            'id'    => uniqid(),
            'label' => $this->task,
        ]);

        $this->task = '';
    }

}
