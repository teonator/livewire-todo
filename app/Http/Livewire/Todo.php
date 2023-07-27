<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public $tasks = [];

    public $task = '';

    protected $rules = [
        'task' => 'required',
    ];

    protected $messages = [
        'task.required' => 'Please enter the :attribute.',
    ];

    public function render()
    {
        return view('livewire.todo');
    }

    public function addTask()
    {
        $this->validate();

        $this->tasks[uniqid()] = [
            'label' => $this->task,
        ];

        $this->task = '';
    }

    public function deleteTask( $taskId )
    {
        unset($this->tasks[$taskId]);
    }

}
