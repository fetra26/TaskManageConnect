<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Projets</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(auth()->user()->ownsTeam(auth()->user()->currentTeam))
            <x-button primary wire:click="$dispatch('openModal', { component: 'projets.create' })">
                Create Projet
            </x-button>
            @endif

            <div class="mt-6 space-y-4">
                @foreach($projets as $projet)
                    <div class="p-4 bg-white shadow rounded-lg flex justify-between">
                        <div>
                            <h3 class="font-medium">{{ $projet->name }}</h3>
                            <p class="text-gray-600">{{ $projet->description }}</p>
                        </div>
                        <div>
                  
<!-- Edit Button -->
<x-button primary wire:click="$dispatch('openModal', { component: 'projets.edit', arguments: { projet: {{ $projet->id }} }})">
    Edit
</x-button>

<!-- Delete Button -->
<x-button danger wire:click="delete({{ $projet->id }})">
    Delete
</x-button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>