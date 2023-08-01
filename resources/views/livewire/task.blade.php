<div class="list-group-item list-group-item-action d-flex align-items-center">
    <a wire:click.prevent="editTask()" class="btn btn-sm me-2 {{ $taskDone ? 'btn-outline-success' : 'btn-outline-secondary' }}">
        <i class="fas fa-check {{ $taskDone ? '' : 'text-white' }}"></i>
    </a>
    <p class="flex-grow-1 mb-0 text-secondary {{ $taskDone ? 'text-decoration-line-through' : '' }}">{{ $taskLabel }}</p>

    <a wire:click.prevent="deleteTask()" class="btn btn-sm text-danger">
        <i class="fas fa-trash"></i>
    </a>
</div>