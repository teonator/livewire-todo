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

                    <form class="d-flex mb-1">
                        <input wire:keydown.enter="addTask" wire:model.lazy="task" type="text" class="form-control me-2 {{ $errors->has('task') ? 'is-invalid' : '' }}" placeholder="New task..." />
                        <button type="submit" disabled class="d-none">Prevent form submit from enter</button>
                        <button wire:click.prevent="addTask" class="btn btn-primary"><i class="fas fa-plus"></i></button>
                    </form>

                    @if($errors->any())
                        <div>
                            @foreach($errors->all() as $error)
                                <span class="text-danger">{{ $error }}</span>
                            @endforeach
                        </div>
                    @endif

                    <div class="d-flex align-items-center mt-4">
                        <h4 class="flex-fill m-0">Tasks</h4>

                        <ul class="nav nav-underline flex-fill justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link {{ $filter == '' ? 'active' : '' }}" wire:click.prevent="filterTask( '' )" href="#">
                                    All ({{ $this->taskCount('') }})
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $filter == 'pending' ? 'active' : '' }}" wire:click.prevent="filterTask( 'pending' )" href="#">
                                    Pending ({{ $this->taskCount('pending') }})
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $filter == 'done' ? 'active' : '' }}" wire:click.prevent="filterTask( 'done' )" href="#">
                                    Done ({{ $this->taskCount('done') }})
                                </a>
                            </li>
                        </ul>
                    </div>

                    @forelse($this->taskfilter($filter) as $id => $task)
                        @if($loop->first)
                            <div class="list-group mt-3">
                        @endif    
                            
                        <livewire:task :key="$id.now()" :taskId="$id" :taskLabel="$task['label']" :taskDone="$task['done']"   />

                        @if($loop->last)
                            </div>
                        @endif
                    @empty
                        <p class="mt-4 text-center">Hooray! You don't have any {{ $filter }} task.</p>
                    @endforelse                

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
