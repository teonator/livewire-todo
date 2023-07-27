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

                    <div class="list-group mt-3">
                        @forelse($tasks as $task)
                            <div class="list-group-item list-group-item-action d-flex align-items-center">
                                {{ $task[ 'label' ] }}
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
