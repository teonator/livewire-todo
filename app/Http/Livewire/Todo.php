<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public $tasks = [];

    public $task = '';

    public $filter = '';

    protected $rules = [
        'task' => 'required',
    ];

    protected $messages = [
        'task.required' => 'Please enter the :attribute.',
    ];

    public function taskFilter($taskFilter = '')
    {
        return array_filter($this->tasks, function($task) use ($taskFilter) {
            switch($taskFilter) {
                case 'pending':
                    return !$task['done'];

                case 'done':
                    return $task['done'];

                default:
                    return true;
            }
        });
    }

    public function taskCount($taskFilter = '')
    {
        return count( $this->taskFilter( $taskFilter ) );
    }

    public function render()
    {
        return view('livewire.todo');
    }

    public function addTask()
    {
        $this->validate();

        $this->tasks[uniqid()] = [
            'label' => $this->task,
            'done' => false,
        ];

        $this->reset('task');
    }

    public function editTask($taskId)
    {
        $this->tasks[$taskId]['done'] = !$this->tasks[$taskId]['done'];
    }

    public function deleteTask($taskId)
    {
        unset($this->tasks[$taskId]);
    }

    public function filterTask($taskFilter) {
        $this->filter = $taskFilter;
    }

}
