<div>
    <div class="row mb-3">
        <div class="col col-xl-8 offset-xl-2">

            <h1>Todo</h1>

        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col col-xl-8">

            <div class="card">
                <div class="card-body p-5">

                    <form wire:submit.prevent="addTask" class="d-flex mb-1">
                        <input wire:model="task" wire:keydown.enter="addTask" type="text" class="form-control me-2" placeholder="New task..." />
                        <button type="submit" disabled class="d-none">Prevent form submit from enter</button>
                        <button class="btn btn-primary"><i class="fas fa-plus"></i></button>
                    </form>

                    @error('task')
                        <div>
                             <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="list-group mt-3">
                        @forelse($tasks as $id => $task)
                            <div class="list-group-item list-group-item-action d-flex align-items-center">
                                <a wire:click.prevent="editTask('{{ $id }}')" class="btn btn-sm me-2 {{ $task['done'] ? 'btn-outline-success' : 'btn-outline-secondary' }}">
                                    <i class="fas fa-check {{ $task['done'] ? '' : 'text-white' }}"></i>
                                </a>

                                <p class="flex-grow-1 mb-0 text-secondary {{ $task['done'] ? 'text-decoration-line-through' : '' }}">{{ $task['label'] }}</p>

                                <a wire:click.prevent="deleteTask('{{ $id }}')" class="btn btn-sm text-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        @empty
                            <p class="mt-4 text-center">Hooray! You don't have any pending task.</p>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col col-xl-8 offset-xl-2 text-end">

            <span>Made with <a href="https://laravel-livewire.com" target="_blank">Livewire</a></span>

        </div>
    </div>
</div>
