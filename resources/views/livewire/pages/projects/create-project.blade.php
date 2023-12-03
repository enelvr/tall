<x-slot name="header">
    Proyecto / Nuevo
</x-slot>
<x-slot name="action">
    <a href="{{route('projects.index')}}" class="btn btn-blue">
        Listado
    </a>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form wire:submit.prevent="storeProject"> 
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="card p-6">
                    <div class="mb-4">
                        <label for="title" class="label">Título:</label>
                        <input type="text" wire:model="title" id="titulo" name="title" class="input" />
                    </div>

                    <div class="mb-4">
                        <label for="description" class="label">Descripción:</label>
                        <textarea wire:model="description" id="description" name="description" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Guardar Proyecto</button>

                </div>
            </div>

            <div class="col-span-1">
                <div class="card p-6">
                    <div class="mb-4">
                        <label for="is_public" class="label">Público:</label>
                        <input type="checkbox" wire:model="is_public" id="is_public" name="is_public" class="mt-1" />
                    </div>

                    <div class="mb-4">
                        <label for="image" class="lBEL">Imagen destacada:</label>
                        <input type="file" wire:model="image" id="image" name="image" class="mt-1 p-2 w-full border rounded-md" />
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div><!-- Max-w-7-->
</div>