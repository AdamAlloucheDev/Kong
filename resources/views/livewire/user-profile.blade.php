<div class="my-4 mb-4">
    <div class="my-4 mb-4">
        <button  class="relative mb-4 inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group" wire:click="startEdit({{ $user->id }})">
            <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-blue-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
            <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
            <span class="relative">Editer</span>
        </button>
        @if ($editId === $user->id)
            <livewire:user-form :user="$user" :key="$user->id"/>
        @endif
    </div>
</div>
