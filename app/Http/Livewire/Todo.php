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
        $this->tasks[uniqid()] = [
            'label' => $this->task
        ];

        $this->task = '';
    }

    public function deleteTask( $taskId )
    {
        unset($this->tasks[$taskId]);
    }

}
